@extends('admin.main')
<div id="main">
    @include('admin/_partials/sidebar')
    <h3>Kitm vartotojai</h3>
    @foreach($users as $user)
        <div>
            <p><b>{{$user->email}}</b> - <span>{{--{{$user->roles->role_name}}--}}
            </span></p>
            <form method="post" action="/updaterole/{{$user->id}}">
                {{csrf_field()}}
                <input type="radio" id="male" name="role" value="1" {{ ($user->roles_id =="1")? "checked" : "" }}>
                <label for="male">Admin</label>
                <input type="radio" id="female" name="role" value="2" {{ ($user->roles_id =="2")? "checked" : "" }}>
                <label for="female">Darbuotojas</label>
                <input type="radio" id="other" name="role" value="3" {{ ($user->roles_id =="3")? "checked" : "" }}>
                <label for="other">Mokytojas</label>
                <input type="radio" id="other" name="role" value="4" {{ ($user->roles_id =="4")? "checked" : "" }}>
                <label for="other">Moksleivis</label>
                <button type="submit" class="btn btn-primary">Keisti</button>
                <hr>
            </form>
        </div>
    @endforeach
    <form method="post" action="/addemail" enctype="multipart/form-data">
        {{csrf_field()}}
        <label>El. Paštas</label>
        <input type="email" name="email" required>
        <button type="submit" class="btn btn-primary">Prideti naują vartotoją</button>
    </form>
</div>
