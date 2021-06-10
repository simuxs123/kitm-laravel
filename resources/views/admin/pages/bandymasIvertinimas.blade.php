@extends('admin.main')
<div id="main">
    <div class="text-center">
        @roles('admin,mokytojas')
        @if($activated)
        <div class="text-center">
            <h5 class="mb-5 mt-5">Anketos pildymo pabaiga: {{$data->end_date}}</h5>
        </div>

        @if(!$pateikta)
        @if($qualiExists)
        <a href="/assessment">
            <button type="button" class="btn btn-success btn-lg">Pildyti įsivertinimo anketą</button>
        </a>
        @else
        <h2 style="color: red;">Jūs neturite išsaugotų mokytojo kvalifikacijų.</h2>
        <a href="/qualification" class="btn btn-primary mt-4">Kvalifikacijas galite pildyti čia</a>
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
        <hr class="mb-5 mt-5">

        @roles('admin,darbuotojas')
        <h3>Vadovo vertinimai</h3>

        <table class="table table-striped">
            <tr>
                <th>Vardas, pavardė</th>
                <th>Būklė</th>
            </tr>
            @foreach($surveys as $survey)
            <tr>
                <td>{{$survey->name.' '.$survey->surname}}</td>
                @if($survey->vertinta == false)
                <td><span style="color: red;">Vertinimas nepateiktas</span></td>
                <td><a href="/guide/{{$survey->user_id}}" class="btn btn-success">Vertinti</a></td>
                @else
                <td><span style="color: green;">Vertinimas pateiktas</span></td>
                @endif
            </tr>
            @endforeach
        </table>
        @endroles
    </div>
</div>