<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AdminModels;
use DB;
use Session;
class AdminController extends Controller
{
    public function indexPage(){
        // csrf_token();
        echo '
        <form action="register_by_admin" method="post">
            <input type="hidden" name="_token" value="'.csrf_token().'">
            <input type="text" name="email" placeholder="Enter Email id"><br>
                    <select name="role" id="role">
                    <option value="">-----Select Role -----</option>
            <option value="1">Admin</option>
            <option value="2">Normal User</option>
        </select><br>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <input type="password" name="c_password" placeholder="Enter Confirm Password"><br>
            <input type="submit" value="Register"><br>
        </form>';
        // echo '
        // <form action="login" method="post">
        //     <input type="hidden" name="_token" value="'.csrf_token().'">
        //     <input type="text" name="email" placeholder="Enter Email id"><br>
        //     <input type="password" name="password" placeholder="Enter Password"><br>
        //     <input type="submit" value="Login"><br>
        // </form>';
        
    }
    public function registerByAdmin(){        
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $c_password = $_REQUEST['c_password'];
        $roleid = $_REQUEST['role'];
        if(!$email){
            echo 'Please enter email';
            exit;
        }
        if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
            echo 'Please enter valid email';
            exit;
        }
        if(!$roleid){
            echo 'Please select role';
            exit;
        }
        if(!is_numeric($roleid)){
            echo 'Please enter numeric value';
            exit;
        }
        if(!$password){
            echo 'Please enter password';
            exit;
        }
        if(!$c_password){
            echo 'Please enter confirm password';
            exit;
        }
        if($password < 6  || $c_password < 6){
            echo 'Please enter minimum 6 character in password fields';
            exit;
        }
        if($password != $c_password){
            echo 'Password and Confirm Password does not match';
            exit;
        }
        $checkEmailExist = DB::select('SELECT * FROM users WHERE email = ?', array($email));
        if(count($checkEmailExist) > 0){
            echo 'This Email id is already exists in our records please try with another email';
            exit;
        }        
        $users = new AdminModels();
        $users->email = $email;
        $users->password = MD5($password);
        $users->role     = $roleid;
        if($users->save()){
            echo 'Registration Success';
        }       
    }
    public function registration(){
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $c_password = $_REQUEST['c_password'];
        $flag = 'registration';
        if($this->validateForm($email,$password,$flag,$c_password)){
            return $this->validateForm($email,$password,$flag,$c_password);
        }
        $checkEmailExist = DB::select('SELECT * FROM users WHERE email = ?', array($email));
        if(count($checkEmailExist) > 0){
            return json_encode([
                'errorEmail'=> 'This Email id is already exists in our records please try with another email'
            ]);
        }      
        $users = new AdminModels();
        $users->email = $email;
        $users->password = MD5($password);
        if($users->save()){
            return json_encode(
                [
                    'msg'=>'Registration Successfull',
                    'code'=>200
                ]
            );
        }
        exit;
        
    }
    public static function validateForm($email=0,$password=0,$flag='',$c_password=0){
        if(!$email){
            return json_encode([
                'errorEmail'=> 'Please enter email'
            ]);
            
        }
        if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
            return json_encode([
                'errorEmail'=>'Please enter valid email'
            ]);            
            
        }
        if(!$password){
            return json_encode([
                'errorPassword'=>'Please enter password'
            ]);  
        }
        if($flag == 'login'){
            if(strlen($password) < 6 ){
                return json_encode([
                    'errorPasswordC'=>'Please enter minimum 6 character in password fields'
                ]);  
                
            }
        }else{
            if(strlen($password) < 6  || strlen($c_password) < 6){
                return json_encode([
                    'errorPasswordC'=>'Please enter minimum 6 character in password and confirm password fields'
                ]);  
                
            }
        }
        if($flag == 'registration'){
            if($password != $c_password){
                return json_encode([
                    'errorPasswordC'=>'Password and Confirm Password does not match'
                ]);  
            }
        }
    }
    public function login(){
        // return redirect('dashboard');
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $flag = 'login';
        if($this->validateForm($email,$password,$flag)){
            return $this->validateForm($email,$password,$flag);
        }
        $checkCred = DB::select('SELECT * FROM users WHERE email = ? AND password =?', array($email,MD5($password)));
        if(count($checkCred) == 0){
            return json_encode([
                'errorMsg'=>'Login Credential does not match with our records'
                ]
            );
        }
        if($checkCred[0]){
            // Login Success
            Session::put('userid', $checkCred[0]->id);
            Session::put('email', $checkCred[0]->email);
            Session::put('password', $checkCred[0]->password);
            Session::put('accessid', $checkCred[0]->role);
            return json_encode(
                [
                    'msg'=>'Login Successfull',
                    'code'=>200
                ]
            );
        }

    }
    public function dashboard(){
        if(!Session::get('userid')){
            return redirect('/');
        }
        echo '<a href="logout">Logout</a>';
    }
    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
