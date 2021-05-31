@extends('admin.main')
<div class="text-center">
    @if($activated)
    <div class="text-center">
        <label>Anketos pildymo pabaiga: {{$data->end_date}}</label>
    </div>
    <a href="/assessment">
        <h2>Mokytojo apklausa</h2>
    </a>
    @else
    <p>Anketa neaktyvuota</p>
    @endif
</div>