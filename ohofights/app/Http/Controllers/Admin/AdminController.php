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
    public function flightListPage(){
        return view('flight-listing');
    }
    public function hotelListPage(){
        return view('hotel-listing');
    }
    public function contactListPage(){
        return view('contact');
    }
    public function normalListPage(){
        return view('listing');
    }
    public function searchFlight(){
        $from_dest = $_POST['from_dest'];
        $to_dest = $_POST['to_dest'];
        $search_date = $_POST['search_date'];
        $getAccessToken = $this->generate_access_token();
        $access_token = json_decode($getAccessToken)->access_token;
        return $this->curl_search_flight($from_dest, $to_dest, $search_date,$access_token);
    }
    public static function generate_access_token(){
        $curl2 = curl_init();

        curl_setopt_array($curl2, array(
        CURLOPT_URL => 'https://test.api.amadeus.com/v1/security/oauth2/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'grant_type=client_credentials&client_id=AAwA8YaaXXbSaAX8mLJqfo9LyzkRPn7C&client_secret=QhlJZlKWKPhDldov',
        CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response2 = curl_exec($curl2);

        curl_close($curl2);
        return $response2;
    }
    public static function curl_search_flight($from_dest='',$to_dest='',$search_date='',$access_token=''){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://test.api.amadeus.com/v2/shopping/flight-offers',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
        "currencyCode": "INR",
        "originDestinations": [
            {
            "id": "1",
            "originLocationCode": "'.$from_dest.'",
            "destinationLocationCode": "'.$to_dest.'",
            "departureDateTimeRange": {
                "date": "'.$search_date.'",
                "time": "10:00:00"
            }
            }
        ],
        "travelers": [
            {
            "id": "1",
            "travelerType": "ADULT"
            }
        ],
        "sources": [
            "GDS"
        ],
        "searchCriteria": {
            "maxFlightOffers": 10,
            "flightFilters": {
            "cabinRestrictions": [
                {
                "cabin": "ECONOMY",
                "coverage": "MOST_SEGMENTS",
                "originDestinationIds": [
                    "1"
                ]
                }
            ]
            }
        }
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$access_token.''
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_encode([
           json_decode($response)
        ]);
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
    /* public function login(){
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
            Session::put('user_created_on', $checkCred[0]->created_at);
            if(Session::get('accessid') == 1){
                return json_encode(
                    [
                        'msg'=>'Login Successfull',
                        'code'=>201,
                        'url' => url('/admin/dashboard')
                    ]
                );
            }
            return json_encode(
                [
                    'msg'=>'Login Successfull',
                    'code'=>200,
                    'url' => url('/')
                ]
            );
        }

    } */

    public function login() {
        // return redirect('dashboard');
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $flag = 'login';
        if ($this->validateForm($email, $password, $flag)) {
            return $this->validateForm($email, $password, $flag);
        }
        $checkCred = DB::select('SELECT * FROM users WHERE email = ? AND password =?', array($email, MD5($password)));
        if (count($checkCred) == 0) {
            return json_encode([
                'errorMsg' => 'Login Credential does not match with our records'
            ]);
        }
        if ($checkCred[0]) {
            // Login Success
            $userId = $checkCred[0]->id;
            Session::put('userid', $userId);
            Session::put("email_$userId", $checkCred[0]->email);
            Session::put("password_$userId", $checkCred[0]->password);
            Session::put("role_$userId", $checkCred[0]->role);
            Session::put("login_time_$userId", now());
            DB::table('user_log')->insert(
                ['userid' => Session::get('userid')]
            );
            if (Session::get("role_$userId") == 1) {
                return json_encode(
                    [
                        'msg' => 'Login Successfull',
                        'code' => 201,
                        'url' => url('/admin/dashboard')
                    ]
                );
            }
            return json_encode(
                [
                    'msg' => 'Login Successfull',
                    'code' => 200,
                    'url' => url('/')
                ]
            );
        }
    }


    public function dashboard() {
        return view('admin.dashboard');
    }

    public function userDetails() {
        // Fetch all users
        $users = DB::table('users')->get();
        
        // Fetch currently logged-in users
        $loggedInUsers = Session::all(); // Assuming you store logged-in users in session

        return view('admin.userdetails', compact('users', 'loggedInUsers'));
    } 

    public function userRegisterDetails() {
        // Fetch all users
        $users = DB::table('users')->where('role', 2)->get();

        // Count the number of normal users
        $normalUserCount = $users->where('role', 2)->count();

        return view('admin.user-register-details', compact('users', 'normalUserCount'));
    }

    public function userLoginDetails() {
        // Fetch currently logged-in users from the session
        // $loggedInUsers = Session::all();

        // // Filter and format logged-in user details
        // $loginDetails = [];
        // foreach ($loggedInUsers as $key => $value) {
        //     if (strpos($key, 'email') !== false) {
        //         $userId = str_replace('email_', '', $key);
        //         $loginDetails[] = [
        //             'email' => $value,
        //             'role' => Session::get("role_$userId") == 1 ? 'Admin' : 'Normal User',
        //             'login_time' => Session::get("login_time_$userId")
        //         ];
        //     }
        // }

        $loggedInUsers = DB::select('SELECT user_log.userid,user_log.created_at,users.email,users.role FROM user_log left join users on user_log.userid = users.id');
        foreach ($loggedInUsers as $key => $value) {
            $loginDetails[]= [
                'email'=>$value->email,
                'role'=>$value->role == 1 ? 'Admin' : 'Normal User',
                'login_time'=>$value->created_at,
            ];
        }
        return view('admin.user-login-details', compact('loginDetails'));
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function profile() {
        $userId = Session::get('userid');

        if (Session::get("role_$userId") == 1) {
            return view('admin.profile');
        }

        return view('profile');
    }

    public function aboutUsContent() {
        return view('admin.about-us-content');
    }

    public function aboutUsImage() {
        return view('admin.about-us-image');
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
