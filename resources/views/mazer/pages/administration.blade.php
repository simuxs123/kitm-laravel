<div id="auth">
        @if($userRole == 'admin')
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
        <h2>prieinama tik administratoriams</h2>

    </div>
    @endif