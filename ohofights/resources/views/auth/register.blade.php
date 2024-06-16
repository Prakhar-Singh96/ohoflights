@extends('layouts.app')

@section('content')
<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title fs-6">Register</h4>
            <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-square-xmark"></i></a>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <p><span id="errorMsg" ></span></p>
                </div>
            </div>
            <div class="modal-login-form py-4 px-md-3 px-0">
                <form id="registerform" method="POST" action="registration">
                    @csrf
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" placeholder="name@example.com" required />
                        <label>Email Address</label>
                        <span class="errorEmail" style="color:red;"></span>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                        <label>Password</label>
                        <span class="errorPassword" style="color:red;"></span>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="c_password" class="form-control" placeholder="Confirm Password" required />
                        <label>Confirm Password</label>
                    </div>

                    <div class="form-group">
                        <button type="button" id="registernbtn" class="btn btn-primary full-width font--bold btn-lg">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer align-items-center justify-content-center">
            <p>Already have an account? <a href="/" class="text-primary fw-medium ms-1">Sign In</a></p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js" integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#registernbtn').click(function(){
        $(this).hide();
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
            },
            url : "registration",
            data : $('#registerform').serialize(),
            type : 'POST',
            dataType : 'json',
            success : function(result){
                if(result.errorMsg != '' || result.errorEmail != '' || result.errorPassword != ''){
                    $('#registernbtn').show();
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
                        window.location.href="/";
                    }, 2000);
                }
            }
        });
});
</script>
@endsection
