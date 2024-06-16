@extends('layouts.app')

@section('content')
<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title fs-6">Sign In</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="modal-login-form py-4 px-md-3 px-0">
                <form method="POST" action="{{ url('login') }}">
                    @csrf
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" placeholder="name@example.com" required />
                        <label>Email Address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                        <label>Password</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
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
@endsection
