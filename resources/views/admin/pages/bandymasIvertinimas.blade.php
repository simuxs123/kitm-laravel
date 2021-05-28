@extends('admin.main')
    <div class="text-center">
        @if (count($errors) > 0)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(Session::has('danger'))
                <div class="alert alert-danger">
                    {{Session::get('danger')}}
                </div>
            @endif
    @include('admin/_partials/sidebar')
            @darbuotojas
                <form class="text-center" enctype='multipart/form-data' method="post" action="/activate-form">
                    {{csrf_field()}}
                    <input type="date" id="date" name="data" >
                    <span></span>
                    <input type="time" id="time" name="laikas" >
                    <input type="submit" class="btn btn-primary" value="Atnaujinti" :disabled='true' >
                </form>
                <div>
                    <label>Ištrinti kai aktyvuota, bandymams</label>
                    <a href="/delete-activate" class="btn btn-danger">Ištrinti</a>
                </div>
            @enddarbuotojas
        @if($activated)
            <div class="text-center">
                <label>Anketos pildymo pabaiga: {{$data->end_date}}</label>
            </div>
{{--            padaryta kad darbuotojas nemato ir negali ieiti forma--}}
                @mokytojas
                    <a href="/assessment/page/1"><h2>Mokytojo apklausa</h2></a>
                @endmokytojas
        @else
            <p>Anketa neaktyvuota</p>
        @endif


    </div>

