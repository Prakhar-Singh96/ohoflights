@extends('layouts.app')

@section('content')
<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title fs-6">Sign In</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <p><span id="errorMsg" ></span></p>
                </div>
            </div>
            <div class="modal-login-form py-4 px-md-3 px-0">
                <form id="loginform" method="POST" action="login">
                    @csrf
                    <!-- <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" placeholder="name@example.com"  />
                        <label>Email Address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Password"  />
                        <label>Password</label>
                    </div> -->
                    <div class="row">
                        <div class="form-floting col-md-12">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="name@example.com"  />
                        <span class="errorEmail" style="color:red;"></span>
                        </div>
                        <div class="form-floting col-md-12" style="padding-top:20px;">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"  />
                        <span class="errorPassword" style="color:red;"></span>
                        </div>
                    </div>
                    <div class="form-group" style="padding-top:20px;">
                        <button id="loginbtn" type="button" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                    </div>

                    <div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
                        <div class="modal-flex-first">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember" />
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="modal-flex-last">
                            <a href="#" class="text-primary fw-medium">Forget Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer align-items-center justify-content-center">
            <p>Don't have an account yet? <a href="{{ url('register') }}" class="text-primary fw-medium ms-1">Sign Up</a></p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js" integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function(){

});
$('#loginbtn').click(function(){
        $(this).hide();
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
            },
            url : "login",
            data : $('#loginform').serialize(),
            type : 'POST',
            dataType : 'json',
            success : function(result){
                if(result.errorMsg != '' || result.errorEmail != '' || result.errorPassword != ''){
                    $('#loginbtn').show();
                }
                console.log(result.errorPassword);
                $('#errorMsg').html(result.errorMsg);
                $('#errorMsg').css('color','red');
                if(result.errorEmail){
                    $('.errorEmail').html(result.errorEmail);
                }
                if(result.errorPassword){
                    $('.errorPassword').html(result.errorPassword);
                }
                if(result.errorPasswordC){
                    $('#errorMsg').html(result.errorPasswordC);
                }
                setTimeout(() => {
                    $('#errorMsg').html('');
                    $('.errorPassword').html('');
                    $('.errorEmail').html('');
                }, 7000);
                console.log(result.code)
                if(result.code == 200){
                    $('#errorMsg').html(result.msg);
                    $('#errorMsg').css('color','green');
                    setTimeout(() => {
                        window.location.href="";
                    }, 2000);
                }
            }
        });
});

</script>
@endsection
