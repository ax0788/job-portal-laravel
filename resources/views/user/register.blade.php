@extends('user.main')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/custom/user-form.css') }}">
@endsection
@section('content')

<section class="user-form-part">

    <div class="user-form-category">
        <div>
            <div class="user-form-title pt-5">
                <h2>Register</h2>
                <p>Setup a new account in a minute.</p>
            </div>
            <ul class="user-form-option">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        <span>facebook</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                        <span>twitter</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-google"></i>
                        <span>google</span>
                    </a>
                </li>
            </ul>
            <div class="user-form-devider">
                <p>or</p>
            </div>
            <form>
                <div class="row m-5">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone number">
                            <small class="form-alert">Please follow this example - 01XXXXXXXXX</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                            <button class="form-icon"><i class="eye fas fa-eye"></i></button>
                            <small class="form-alert">Password must be 6 characters</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Repeat Password">
                            <button class="form-icon"><i class="eye fas fa-eye"></i></button>
                            <small class="form-alert">Password must be 6 characters</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-inline">
                                <i class="fas fa-user-check"></i>
                                <span>Create new account</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="user-form-direction">
                <p>Already have an account? click on the <span>( sign in )</span> button above.</p>
            </div>
        </div>
    </div>
</section>
@endsection
