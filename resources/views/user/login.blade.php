@extends('user.main')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/custom/user-form.css') }}">
@endsection
@section('content')

<section class="user-form-part">

    <div class="user-form-category">

        <div>
            <div class="user-form-title pt-5">
                <h2>Login</h2>
                <p>Use credentials to access your account.</p>
            </div>
            <form>
                <div class="row m-2">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone number">
                            <small class="form-alert">Please follow this example - 01XXXXXXXXX</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="form-control" id="pass" placeholder="Password">
                            <button type="button" class="form-icon"><i class="eye fas fa-eye"></i></button>
                            <small class="form-alert">Password must be 6 characters</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="signin-check">
                                <label class="custom-control-label" for="signin-check">Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group text-right">
                            <a href="#" class="form-forgot">Forgot password?</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-inline">
                                <i class="fas fa-unlock"></i>
                                <span>Enter your account</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="user-form-direction">
                <p>Don't have an account? click on the <span>( sign up )</span> button above.</p>
            </div>
        </div>
    </div>
</section>
@endsection
