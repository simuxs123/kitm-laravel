@extends('admin.main')
<div id="main">
    <h4>{{$name->name.' '.$name->surname}}</h4>
    @if($assessmentcheck == false)
    <h5 style="color: red;">Nepateikta įsivertinimo anketa</h5>
    @endif
    @if($surveycheck == false)
    <h5 style="color: red;">Nėra pateiktų modulio apklausų</h5>
    @endif
</div>