@extends('admin.main')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
<!--{{-- @if($userRole === 'admin') --}}-->
    @if(isset($userName))
        <h3>Kitm vartotojai</h3>
        @foreach($users as $user)
            <div>
                <p>{{$user->email}} <span>{{$user->roles->role_name}}</span></p>
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
        <h2>prieinama tik administratoriams</h2>
    @endif
</div>

