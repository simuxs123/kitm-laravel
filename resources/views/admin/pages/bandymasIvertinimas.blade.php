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
    <h3>Jūsų anketa peteikta, redaguoti jos nebegalite</h3>
    @endif
    @else
    <p>Anketa neaktyvuota</p>
    @endif
</div>