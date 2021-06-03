@extends('admin.main')
<div id="main">
    <div class="text-center">
        @if($activated)
        <div class="text-center">
            <label>Anketos pildymo pabaiga: {{$data->end_date}}</label>
        </div>

        @if(!$pateikta)
        <a href="/assessment">
            <h2>Mokytojo apklausa</h2>
        </a>
        @else
        <a href="/assessment">
            <h2>Peržiūrėti anketą</h2>
        </a>
        <h4>Jūsų anketa pateikta, redaguoti jos nebegalite.</h4>

        @endif

        @else
        <p>Anketa neaktyvuota</p>
        @endif
<hr>
        <h3>Vadovo vertinimai</h3>

        <table class="table table-striped">
            <tr>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th></th>
            </tr>
            @foreach($surveys as $survey)
            <tr>
                <td>{{$survey->name}}</td>
                <td>{{$survey->surname}}</td>
                <td><a href="/guide/{{$survey->user_id}}">vadovo vertinimas</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>