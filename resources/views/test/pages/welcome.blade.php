@extends('test.main')
@section('content')
    <div class="jumbotron">
        @if(isset($userName))
            <h4>Welcome {{ $userName }}!</h4>
            <h3>Yor email {{$userEmail}}</h3>
        @else
            <a href="/sign-in" class="btn btn-primary btn-large">Click here to sign in</a>
        @endif
    </div>
@endsection
