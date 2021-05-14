@extends('test.main')
@section('content')
    <div id="auth">
        @if(isset($userName))
            <h4>Welcome {{ $userName }}!</h4>
            <h3>Yor email {{$userEmail}}</h3>
        @else
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/kitm2.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Prisijunkite, su savo Office 365 duomenimis.</p>
                        <a href="/sign-in" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Click here to sign in</a>

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
