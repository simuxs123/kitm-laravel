@extends('admin.main')
<div id="main">
    <div class="text-center">
        @roles('admin,mokytojas')
        @if($activated)
        <div class="text-center">
            <label>Anketos pildymo pabaiga: {{$data->end_date}}</label>
        </div>

        @if(!$pateikta)
        @if($qualiExists)
        <a href="/assessment">
            <button type="button" class="btn btn-success">Pildyti mokytojo apklausą</button>
        </a>
        @else
        <h2 style="color: red;">Jūs neturite išsaugotų <a href="/qualification">mokytojo kvalifikacijų</a></h2>
        @endif
        @else
        <h4 style="color: green;">Jūsų anketa pateikta, redaguoti jos nebegalite.</h4>
        <a href="/assessment">
            <button type="button" class="btn btn-outline-success">Peržiūrėti anketą</button>
        </a>
        <a class="btn btn-outline-warning" href="/export">Atsiųsti anketos duomenis</a>
        @endif
        @else
        <p>Anketa neaktyvuota</p>
        @endif
        @endroles
        <hr>

        @roles('admin,darbuotojas')
        <h3>Vadovo vertinimai</h3>

        <table class="table table-striped">
            <tr>
                <th>Vardas, pavardė</th>
                <th></th>
            </tr>
            @foreach($surveys as $survey)
            <tr>
                <td>{{$survey->name.' '.$survey->surname}}</td>
                <td><a href="/guide/{{$survey->user_id}}">vadovo vertinimas</a></td>
            </tr>
            @endforeach
        </table>
        @endroles
    </div>
</div>