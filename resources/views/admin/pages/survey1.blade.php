@extends('admin.main')
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div id="main">
<form method="post" action="/saveSurvey/{{$module->id}}">
    {{csrf_field()}}
    <h2>{{$module->module_name}}</h2>
    <div class="grupe">
        <h3> grupe </h3>
        <h4>{{$module->group_name}}</h4>
    </div>
    <h6>Kokioje % dalyje modulio užsiėmimų dalyvavote?</h6>
    <div>
        <label>
            <input role="radio" type="radio" name="attendance" aria-label="0% - 25%" value="0% - 25%">
            <span>0% - 25%</span>
        </label>
    </div>
    <div>
        <label>
            <input role="radio" type="radio" name="attendance" aria-label="26% - 50%" value="26% - 50%">
            <span>26% - 50%</span>
        </label>
    </div>
    <div>
        <label>
            <input role="radio" type="radio" name="attendance" aria-label="51% - 75%" value="51% - 75%">
            <span>51% - 75%</span>
        </label>
    </div>
    <div>
        <label>
            <input role="radio" type="radio" name="attendance" aria-label="75% - 100%" value="75% - 100%">
            <span>75% - 100%</span>
        </label>
    </div>
    <h6>Pažymėkite skalėje, kaip vertinate išsakytą teiginį</h6>
    <p>
        Tikrai nepritariu (1)
        Nepritariu (2)
        Nei nepritariu, nei pritariu (3)
        Pritariu (4)
        Tikrai pritariu (5)
    </p>
    <div>
        <h6>Šį modulį laikau svarbia profesinio rengimo dalimi</h6>
        <label>
            <input role="radio" type="radio" name="module_is_important" value="1">
            <input role="radio" type="radio" name="module_is_important" value="2">
            <input role="radio" type="radio" name="module_is_important" value="3">
            <input role="radio" type="radio" name="module_is_important" value="4">
            <input role="radio" type="radio" name="module_is_important" value="5">
        </label>
    </div>
    <div>
        <h6>Modulio medžiaga ir mokymosi ištekliai yra naudingi, padėjo pasiekti iškeltus tikslus, įgyti numatytas
            kompetencijas</h6>
        <label>
            <input role="radio" type="radio" name="module_material_is_important" value="1">
            <input role="radio" type="radio" name="module_material_is_important" value="2">
            <input role="radio" type="radio" name="module_material_is_important" value="3">
            <input role="radio" type="radio" name="module_material_is_important" value="4">
            <input role="radio" type="radio" name="module_material_is_important" value="5">
        </label>
    </div>
    <div>
        <h6>Modulyje taikomi pažangūs mokymo(si) metodai (pvz.: projektiniai darbai, kūrybinės užduotys)</h6>
        <label>
            <input role="radio" type="radio" name="module_advanced_methods" value="1">
            <input role="radio" type="radio" name="module_advanced_methods" value="2">
            <input role="radio" type="radio" name="module_advanced_methods" value="3">
            <input role="radio" type="radio" name="module_advanced_methods" value="4">
            <input role="radio" type="radio" name="module_advanced_methods" value="5">
        </label>
    </div>
    <div>
        <h6>Vertinimo kriterijai ir tvarka yra aiškūs</h6>
        <label>
            <input role="radio" type="radio" name="assessment_and_procedure" value="1">
            <input role="radio" type="radio" name="assessment_and_procedure" value="2">
            <input role="radio" type="radio" name="assessment_and_procedure" value="3">
            <input role="radio" type="radio" name="assessment_and_procedure" value="4">
            <input role="radio" type="radio" name="assessment_and_procedure" value="5">
        </label>
    </div>
    <div>
        <h6>Mokytojas nuosekliai naudoja Moodle, Teams ar kitokią virtualaus mokymosi aplinką</h6>
        <label>
            <input role="radio" type="radio" name="the_teacher_virtually_teaches" value="1">
            <input role="radio" type="radio" name="the_teacher_virtually_teaches" value="2">
            <input role="radio" type="radio" name="the_teacher_virtually_teaches" value="3">
            <input role="radio" type="radio" name="the_teacher_virtually_teaches" value="4">
            <input role="radio" type="radio" name="the_teacher_virtually_teaches" value="5">
        </label>
    </div>
    <div>
        <h6>Esu patenkintas materialiniais ištekliais ir jų prieinamumu (kompiuterinė, techninė įranga)</h6>
        <label>
            <input role="radio" type="radio" name="good_resources" value="1">
            <input role="radio" type="radio" name="good_resources" value="2">
            <input role="radio" type="radio" name="good_resources" value="3">
            <input role="radio" type="radio" name="good_resources" value="4">
            <input role="radio" type="radio" name="good_resources" value="5">
        </label>
    </div>
    <div>
        <h6>Esu patenkintas saugia mokymosi aplinka</h6>
        <label>
            <input role="radio" type="radio" name="safe_environment" value="1">
            <input role="radio" type="radio" name="safe_environment" value="2">
            <input role="radio" type="radio" name="safe_environment" value="3">
            <input role="radio" type="radio" name="safe_environment" value="4">
            <input role="radio" type="radio" name="safe_environment" value="5">
        </label>
    </div>
    <div>
        <h6>Kiek bendrai esate patenkinta(s) dalyko turinio ir dėstymo kokybe?</h6>
        <label>
            <input role="radio" type="radio" name="quality" value="1">
            <input role="radio" type="radio" name="quality" value="2">
            <input role="radio" type="radio" name="quality" value="3">
            <input role="radio" type="radio" name="quality" value="4">
            <input role="radio" type="radio" name="quality" value="5">
            <input role="radio" type="radio" name="quality" value="6">
            <input role="radio" type="radio" name="quality" value="7">
            <input role="radio" type="radio" name="quality" value="8">
            <input role="radio" type="radio" name="quality" value="9">
            <input role="radio" type="radio" name="quality" value="10">
        </label>
    </div>
    <div>
        <h6>Jūsų pageidavimai ir pasiūlymai dėl šio kurso patobulinimo?</h6>
        <textarea name="preferences" placeholder="Enter your answer">

    </textarea>
    </div>
    <div>
        <h6>Ar rekomenduotumėte mūsų mokyklą kitiems?</h6>
        <label>
            <input role="radio" type="radio" name="recommendation" value="1">
            <input role="radio" type="radio" name="recommendation" value="2">
            <input role="radio" type="radio" name="recommendation" value="3">
            <input role="radio" type="radio" name="recommendation" value="4">
            <input role="radio" type="radio" name="recommendation" value="5">
            <input role="radio" type="radio" name="recommendation" value="6">
            <input role="radio" type="radio" name="recommendation" value="7">
            <input role="radio" type="radio" name="recommendation" value="8">
            <input role="radio" type="radio" name="recommendation" value="9">
            <input role="radio" type="radio" name="recommendation" value="10">
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>