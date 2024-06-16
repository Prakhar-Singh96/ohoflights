@extends('layouts.app')

@section('content')
<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title fs-6">Register</h4>
            <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-square-xmark"></i></a>
        </div>
        <div class="modal-body">
            <div class="modal-login-form py-4 px-md-3 px-0">
                <form method="POST" action="{{ url('register') }}">
                    @csrf
                    <div class="form-floating mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                        <label>Your Name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" name="email" class="form-control" placeholder="name@example.com" required />
                        <label>Email Address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                        <label>Password</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required />
                        <label>Confirm Password</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer align-items-center justify-content-center">
            <p>Already have an account? <a href="{{ url('login') }}" class="text-primary fw-medium ms-1">Sign In</a></p>
        </div>
    </div>
</div>
@endsection
