@extends('admin.main')
<div id="main">
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-content">
        <div class="FormBig">
            <div class="page-heading formHead ">
                <h2> {{$module->module_name}}
                    / {{$module->teacher_name}} {{$module->teacher_surname}} {{$module->group_name}}</h2>
                <h6>Ši anketa skirta išsiaiškinti Jūsų nuomonę apie pasibaigusio modulio kokybę. Prašome atsakyti į
                    žemiau pateiktus klausimus. Nuoširdūs Jūsų atsakymai padės mums tobulinti mokymo(si) kokybę. Anketa
                    yra anoniminė.</h6>
            </div>
            <div class="page-content formBody col-12 justify-content-center">
                <form class="col" method="post" action="/saveSurvey/{{$module->id}}">
                    {{csrf_field()}}
                    <div class="card">
                        <div class="card-header">
                            <h4>1.Kokioje % dalyje modulio užsiėmimų dalyvavote?:</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <input type="radio" id="25" name="attendance" value="0% - 25%">
                                <label for="25">0-25%</label><br>
                                <input type="radio" id="50" name="attendance" value="26% - 50%">
                                <label for="50">26-50%</label><br>
                                <input type="radio" id="75" name="attendance" value="51% - 75%">
                                <label for="75">51-75%</label><br>
                                <input type="radio" id="100" name="attendance" value="76% - 100%">
                                <label for="100">76-100%</label><br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <h4>2.Pažymėkite skalėje, kaip vertinate išsakytą teiginį:</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class=" table-responsive-sm">
                                    <table class="table  table-striped">
                                        <tbody>
                                        <tr>
                                            <th></th>
                                            <th>Tikrai nepritariu (1)</th>
                                            <th>Nepritariu (2)</th>
                                            <th>Nei nepritariu, nei pritariu (3)</th>
                                            <th>Pritariu (4)</th>
                                            <th>Tikrai pritariu (5)</th>
                                        </tr>
                                        <tr>
                                            <th>Šį modulį laikau svarbia profesinio rengimo dalimi</th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_is_important" id="inlineRadio1" value="1">
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_is_important" id="inlineRadio1" value="2">
                                                    <label class="form-check-label" for="inlineRadio1">2</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_is_important" id="inlineRadio1" value="3">
                                                    <label class="form-check-label" for="inlineRadio1">3</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_is_important" id="inlineRadio1" value="4">
                                                    <label class="form-check-label" for="inlineRadio1">4</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_is_important" id="inlineRadio1" value="5">
                                                    <label class="form-check-label" for="inlineRadio1">5</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Modulio medžiaga ir mokymosi ištekliai yra naudingi, padėjo pasiekti
                                                iškeltus
                                                tikslus,
                                                įgyti numatytas kompetencijas
                                            </th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_material_is_important" id="inlineRadio2" value="1">
                                                    <label class="form-check-label" for="inlineRadio2">1</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_material_is_important" id="inlineRadio2" value="2">
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_material_is_important" id="inlineRadio2" value="3">
                                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_material_is_important" id="inlineRadio2" value="4">
                                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_material_is_important" id="inlineRadio2" value="5">
                                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Modulyje taikomi pažangūs mokymo(si) metodai (pvz.: projektiniai darbai,
                                                kūrybinės
                                                užduotys)
                                            </th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_advanced_methods" id="inlineRadio3" value="1">
                                                    <label class="form-check-label" for="inlineRadio2">1</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_advanced_methods" id="inlineRadio3" value="2">
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_advanced_methods" id="inlineRadio3" value="3">
                                                    <label class="form-check-label" for="inlineRadio2">3</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_advanced_methods" id="inlineRadio3" value="4">
                                                    <label class="form-check-label" for="inlineRadio2">4</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="module_advanced_methods" id="inlineRadio3" value="5">
                                                    <label class="form-check-label" for="inlineRadio2">5</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Vertinimo kriterijai ir tvarka yra aiškūs</th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="assessment_and_procedure" id="inlineRadio4" value="1">
                                                    <label class="form-check-label" for="inlineRadio4">1</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="assessment_and_procedure" id="inlineRadio4" value="2">
                                                    <label class="form-check-label" for="inlineRadio4">2</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="assessment_and_procedure" id="inlineRadio4" value="3">
                                                    <label class="form-check-label" for="inlineRadio4">3</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="assessment_and_procedure" id="inlineRadio4" value="4">
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="assessment_and_procedure" id="inlineRadio4" value="5">
                                                    <label class="form-check-label" for="inlineRadio4">5</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Mokytojas nuosekliai naudoja Moodle, Teams ar kitokią virtualaus mokymosi
                                                aplinką
                                            </th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="the_teacher_virtually_teaches" id="inlineRadio4" value="1">
                                                    <label class="form-check-label" for="inlineRadio4">1</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="the_teacher_virtually_teaches" id="inlineRadio4" value="2">
                                                    <label class="form-check-label" for="inlineRadio4">2</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="the_teacher_virtually_teaches" id="inlineRadio4" value="3">
                                                    <label class="form-check-label" for="inlineRadio4">3</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="the_teacher_virtually_teaches" id="inlineRadio4" value="4">
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="the_teacher_virtually_teaches" id="inlineRadio4" value="5">
                                                    <label class="form-check-label" for="inlineRadio4">5</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Esu patenkintas materialiniais ištekliais ir jų prieinamumu (kompiuterinė,
                                                techninė
                                                įranga)
                                            </th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="good_resources" id="inlineRadio5" value="1">
                                                    <label class="form-check-label" for="inlineRadio5">1</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="good_resources" id="inlineRadio5" value="2">
                                                    <label class="form-check-label" for="inlineRadio5">2</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="good_resources" id="inlineRadio4" value="3">
                                                    <label class="form-check-label" for="inlineRadio5">3</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="good_resources" id="inlineRadio5" value="4">
                                                    <label class="form-check-label" for="inlineRadio5">4</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="good_resources" id="inlineRadio5" value="5">
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Esu patenkintas saugia mokymosi aplinka</th>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="safe_environment" id="inlineRadio6" value="1">
                                                    <label class="form-check-label" for="inlineRadio4">1</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="safe_environment" id="inlineRadio6" value="2">
                                                    <label class="form-check-label" for="inlineRadio4">2</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="safe_environment" id="inlineRadio6" value="3">
                                                    <label class="form-check-label" for="inlineRadio4">3</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="safe_environment" id="inlineRadio6" value="4">
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="safe_environment" id="inlineRadio6" value="5">
                                                    <label class="form-check-label" for="inlineRadio4">5</label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>3. Kiek bendrai esate patenkinta(s) dalyko turinio ir dėstymo kokybe?</h4>
                            <em>
                                <p class="text-muted">Įvertinkite modulio kokybę kaip įvairių Jums asmeniškai svarbių aspektų visumą balais
                                    nuo 1
                                    iki
                                    10, kai 1 - visiškai nepatenkinta(s), 10 - absoliučiai patenkinta(s)
                                </p>
                            </em>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="1">
                                        <label class="form-check-label" for="inlineRadioExt">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="2">
                                        <label class="form-check-label" for="inlineRadioExt">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="3">
                                        <label class="form-check-label" for="inlineRadioExt">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="4">
                                        <label class="form-check-label" for="inlineRadioExt">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="5">
                                        <label class="form-check-label" for="inlineRadioExt">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="6">
                                        <label class="form-check-label" for="inlineRadioExt">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="7">
                                        <label class="form-check-label" for="inlineRadioExt">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="8">
                                        <label class="form-check-label" for="inlineRadioExt">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="9">
                                        <label class="form-check-label" for="inlineRadioExt">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadioExt" value="10">
                                        <label class="form-check-label" for="inlineRadioExt">10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>4.Jūsų pageidavimai ir pasiūlymai dėl šio kurso patobulinimo?</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <textarea name="preferences"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>5.Ar rekomenduotumėte mūsų mokyklą kitiems?</h4>
                            <em>
                                <p class="text-muted">Įvertinkite balais nuo 1 iki 10, kai 1 – tikrai nerekomenduočiau, 10 – tikrai rekomenduočiau
                                </p>
                            </em>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="1">
                                    <label class="form-check-label" for="inlineRadioExt2">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="2">
                                    <label class="form-check-label" for="inlineRadioExt2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="3">
                                    <label class="form-check-label" for="inlineRadioExt2">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="4">
                                    <label class="form-check-label" for="inlineRadioExt2">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="5">
                                    <label class="form-check-label" for="inlineRadioExt2">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="6">
                                    <label class="form-check-label" for="inlineRadioExt2">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="7">
                                    <label class="form-check-label" for="inlineRadioExt2">7</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="8">
                                    <label class="form-check-label" for="inlineRadioExt2">8</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="9">
                                    <label class="form-check-label" for="inlineRadioExt2">9</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recommendation" id="inlineRadioExt2" value="10">
                                    <label class="form-check-label" for="inlineRadioExt2">10</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-1 mb-1">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
