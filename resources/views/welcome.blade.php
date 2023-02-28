@extends('layouts.app')

@section('content')
    <div class="col-sm-12 text-black">
        <div class="px-5 w-50 mx-auto">
            <i class="fas fa-crow fa-2x me-3" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 mt-2 pt-5 mx-auto w-50 h-50">

            <form id="login-form" class="p-5 w-100" method="post" action="{{route('login')}}">
                @csrf

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg">
                    <label class="form-label" for="form2Example18" style="margin-left: 0px;">Email address</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg">
                    <label class="form-label" for="form2Example28" style="margin-left: 0px;">Password</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="pt-1 mb-4">
                    <button class="btn btn-login btn-block w-50" type="submit">Login</button>
                </div>

                <p class="small mb-1 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>

            </form>

        </div>

    </div>
@endsection
