@extends('admin.main')
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
</div>