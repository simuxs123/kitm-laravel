@extends('test.main')
@section('content')
    <div id="auth">
        @if(isset($userName))
            <h4>Welcome {{ $userName }}!</h4>
            <h3>Yor email {{$userEmail}}</h3>
            <p>Role {{$userRole}}</p>
{{--            @can('isAdmin')--}}
{{--                <div class="btn btn-success btn-lg">--}}
{{--                    You have Admin Access--}}
{{--                </div>--}}
{{--            @elsecan('isDarbuotojas')--}}
{{--                <div class="btn btn-primary btn-lg">--}}
{{--                    You have Darbuotojas Access--}}
{{--                </div>--}}
{{--            @elsecan('isMokytojas')--}}
{{--                <div class="btn btn-primary btn-lg">--}}
{{--                    You have Mokytojas Access--}}
{{--                </div>--}}
{{--            @else--}}
{{--                <div class="btn btn-info btn-lg">--}}
{{--                    You have User Access--}}
{{--                </div>--}}
{{--            @endcan--}}
        @foreach($users as $user)
            <div>
                <p>{{$user->email}} <span>{{$user->roles->role_name}}</span></p>
                <form method="post" action="/updaterole/{{$user->id}}">
                    {{csrf_field()}}
                    <input type="radio" id="male" name="role" value="1">
                    <label for="male">Admin</label>
                    <input type="radio" id="female" name="role" value="2">
                    <label for="female">Darbuotojas</label>
                    <input type="radio" id="other" name="role" value="3">
                    <label for="other">Mokytojas</label>
                    <input type="radio" id="other" name="role" value="4">
                    <label for="other">Moksleivis</label>
                    <button type="submit">keisti</button>
                </form>
            </div>
            @endforeach
            <form method="post" action="/addemail" enctype="multipart/form-data">
                {{csrf_field()}}
                <label>Email</label>
                <input type="email" name="email" required>
                <button type="submit">Submit</button>
            </form>
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
