@extends('admin.main')

<form method="post" action="/saveSurvey">
    {{csrf_field()}}

    <div class="grupe">
        <h3> grupe </h3>
        <label>
            <input
                role="radio" type="radio" name="group">
            <span>zp20/1</span>
        </label>
    </div>
    <h6>Kokioje % dalyje modulio užsiėmimų dalyvavote?</h6>
    <div>
        <label>
            <input
                role="radio" type="radio" name="attendance"
                aria-label="0% - 25%" value="0% - 25%">
            <span>0% - 25%</span>
        </label>
    </div>
    <div>
        <label>
            <input
                role="radio" type="radio" name="attendance"
                aria-label="26% - 50%" value="26% - 50%">
            <span>26% - 50%</span>
        </label>
    </div>
    <div>
        <label>
            <input
                role="radio" type="radio" name="attendance"
                aria-label="51% - 75%" value="51% - 75%">
            <span>51% - 75%</span>
        </label>
    </div>
    <div>
        <label>
            <input
                role="radio" type="radio" name="attendance"
                aria-label="75% - 100%" value="75% - 100%">
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
            <input
                role="radio" type="radio" name="module_is_important" value="0-20%">
            <input
                role="radio" type="radio" name="module_is_important" value="20-40%">
            <input
                role="radio" type="radio" name="module_is_important" value="40-60%">
            <input
                role="radio" type="radio" name="module_is_important" value="60-80%">
            <input
                role="radio" type="radio" name="module_is_important" value="80-100%">
        </label>
    </div>
    <div>
        <h6>Modulio medžiaga ir mokymosi ištekliai yra naudingi, padėjo pasiekti iškeltus tikslus, įgyti numatytas
            kompetencijas</h6>
        <label>
            <input
                role="radio" type="radio" name="module_material_is_important" value="0-20%">
            <input
                role="radio" type="radio" name="module_material_is_important" value="20-40%">
            <input
                role="radio" type="radio" name="module_material_is_important" value="40-60%">
            <input
                role="radio" type="radio" name="module_material_is_important" value="60-80%">
            <input
                role="radio" type="radio" name="module_material_is_important" value="80-100%">
        </label>
    </div>
    <div>
        <h6>Modulyje taikomi pažangūs mokymo(si) metodai (pvz.: projektiniai darbai, kūrybinės užduotys)</h6>
        <label>
            <input
                role="radio" type="radio" name="module_advanced_methods" value="0-20%">
            <input
                role="radio" type="radio" name="module_advanced_methods" value="20-40%">
            <input
                role="radio" type="radio" name="module_advanced_methods" value="40-60%">
            <input
                role="radio" type="radio" name="module_advanced_methods" value="60-80%">
            <input
                role="radio" type="radio" name="module_advanced_methods" value="80-100%">
        </label>
    </div>
    <div>
        <h6>Vertinimo kriterijai ir tvarka yra aiškūs</h6>
        <label>
            <input
                role="radio" type="radio" name="assessment_and_procedure" value="0-20%">
            <input
                role="radio" type="radio" name="assessment_and_procedure" value="20-40%">
            <input
                role="radio" type="radio" name="assessment_and_procedure" value="40-60%">
            <input
                role="radio" type="radio" name="assessment_and_procedure" value="60-80%">
            <input
                role="radio" type="radio" name="assessment_and_procedure" value="80-100%">
        </label>
    </div>
    <div>
        <h6>Mokytojas nuosekliai naudoja Moodle, Teams ar kitokią virtualaus mokymosi aplinką</h6>
        <label>
            <input
                role="radio" type="radio" name="the_teacher_virtually_teaches" value="0-20%">
            <input
                role="radio" type="radio" name="the_teacher_virtually_teaches" value="20-40%">
            <input
                role="radio" type="radio" name="the_teacher_virtually_teaches" value="40-60%">
            <input
                role="radio" type="radio" name="the_teacher_virtually_teaches" value="60-80%">
            <input
                role="radio" type="radio" name="the_teacher_virtually_teaches" value="80-100%">
        </label>
    </div>
    <div>
        <h6>Esu patenkintas materialiniais ištekliais ir jų prieinamumu (kompiuterinė, techninė įranga)</h6>
        <label>
            <input
                role="radio" type="radio" name="good_resources" value="0-20%">
            <input
                role="radio" type="radio" name="good_resources" value="20-40%">
            <input
                role="radio" type="radio" name="good_resources" value="40-60%">
            <input
                role="radio" type="radio" name="good_resources" value="60-80%">
            <input
                role="radio" type="radio" name="good_resources" value="80-100%">
        </label>
    </div>
    <div>
        <h6>Esu patenkintas saugia mokymosi aplinka</h6>
        <label>
            <input
                role="radio" type="radio" name="safe_environment" value="0-20%">
            <input
                role="radio" type="radio" name="safe_environment" value="20-40%">
            <input
                role="radio" type="radio" name="safe_environment" value="40-60%">
            <input
                role="radio" type="radio" name="safe_environment" value="60-80%">
            <input
                role="radio" type="radio" name="safe_environment" value="80-100%">
        </label>
    </div>
    <div>
        <h6>Kiek bendrai esate patenkinta(s) dalyko turinio ir dėstymo kokybe?</h6>
        <label>
            <input
                role="radio" type="radio" name="quality" value="0-10%">
            <input
                role="radio" type="radio" name="quality" value="10-20%">
            <input
                role="radio" type="radio" name="quality" value="20-30%">
            <input
                role="radio" type="radio" name="quality" value="30-40%">
            <input
                role="radio" type="radio" name="quality" value="40-50%">
            <input
                role="radio" type="radio" name="quality" value="50-60%">
            <input
                role="radio" type="radio" name="quality" value="60-70%">
            <input
                role="radio" type="radio" name="quality" value="70-80%">
            <input
                role="radio" type="radio" name="quality" value="80-90%">
            <input
                role="radio" type="radio" name="quality" value="90-100%">
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
            <input
                role="radio" type="radio" name="recommendation" value="0-10%">
            <input
                role="radio" type="radio" name="recommendation" value="10-20%">
            <input
                role="radio" type="radio" name="recommendation" value="20-30%">
            <input
                role="radio" type="radio" name="recommendation" value="30-40%">
            <input
                role="radio" type="radio" name="recommendation" value="40-50%">
            <input
                role="radio" type="radio" name="recommendation" value="50-60%">
            <input
                role="radio" type="radio" name="recommendation" value="60-70%">
            <input
                role="radio" type="radio" name="recommendation" value="70-80%">
            <input
                role="radio" type="radio" name="recommendation" value="80-90%">
            <input
                role="radio" type="radio" name="recommendation" value="90-100">
        </label>
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>

</form>

