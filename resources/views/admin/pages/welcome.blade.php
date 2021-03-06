@extends('login.main')
@section('content')
    <div id="auth">
        @if(isset($userName))
            @include('admin/pages/dashboard')
        @else
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <img src="assets/images/logo/kitm3.png" alt="Logo">
                    </div>
                    <h1 class="auth-title">Sveiki</h1>
                    <p class="auth-subtitle mb-5">Prisijunkite, su savo Office 365 duomenimis.</p>
                        <a href="/sign-in" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Prisijungti</a>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
    @endif

@endsection
