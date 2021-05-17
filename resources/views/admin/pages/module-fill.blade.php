@extends('admin.main')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    @include('admin/_partials/sidebar')
    <div class="FormBig">
        <div class="formHead">
            <h2>3. {{$module->module_name}} / {{$module->teacher_name}} {{$module->teacher_surname}} {{$module->group_name}}</h2>
            <h6>Ši anketa skirta išsiaiškinti Jūsų nuomonę apie pasibaigusio modulio kokybę. Prašome atsakyti į žemiau pateiktus klausimus. Nuoširdūs Jūsų atsakymai padės mums tobulinti mokymo(si)  kokybę. Anketa yra anoniminė.</h6>
        </div>
        <div class="formBody">
            <form action="/action_page.php">
                <h4>1.Kokioje % dalyje modulio užsiėmimų dalyvavote?:</h4>
                <input type="radio" id="25" name="25" value=25>
                <label for="25">0-25%</label><br>
                <input type="radio" id="50" name="50" value=50>
                <label for="50">26-50%</label><br>
                <input type="radio" id="75" name="75" value=75>
                <label for="75">51-75%</label><br>
                <input type="radio" id="100" name="100" value=100>
                <label for="100">76-100%</label><br>

                <br>

                <h4>2.Pažymėkite skalėje, kaip vertinate išsakytą teiginį:</h4>
                <table>
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
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="option11">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="option12">
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="option13">
                                <label class="form-check-label" for="inlineRadio1">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="option14">
                                <label class="form-check-label" for="inlineRadio1">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="option15">
                                <label class="form-check-label" for="inlineRadio1">5</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Modulio medžiaga ir mokymosi ištekliai yra naudingi, padėjo pasiekti iškeltus tikslus, įgyti numatytas kompetencijas</th>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio2" value="option21">
                                <label class="form-check-label" for="inlineRadio2">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio2" value="option22">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio2" value="option23">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio2" value="option24">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio2" value="option25">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Modulyje taikomi pažangūs mokymo(si) metodai (pvz.: projektiniai darbai, kūrybinės užduotys)</th>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio3" value="option31">
                                <label class="form-check-label" for="inlineRadio2">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio3" value="option32">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio3" value="option33">
                                <label class="form-check-label" for="inlineRadio2">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio3" value="option34">
                                <label class="form-check-label" for="inlineRadio2">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio3" value="option35">
                                <label class="form-check-label" for="inlineRadio2">5</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Mokytojas nuosekliai naudoja Moodle, Teams ar kitokią virtualaus mokymosi aplinką</th>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio4" value="option41">
                                <label class="form-check-label" for="inlineRadio4">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio4" value="option42">
                                <label class="form-check-label" for="inlineRadio4">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio4" value="option43">
                                <label class="form-check-label" for="inlineRadio4">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio4" value="option44">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio4" value="option45">
                                <label class="form-check-label" for="inlineRadio4">5</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Esu patenkintas materialiniais ištekliais ir jų prieinamumu (kompiuterinė, techninė įranga)</th>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio5" id="inlineRadio5" value="option51">
                                <label class="form-check-label" for="inlineRadio5">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio5" id="inlineRadio5" value="option52">
                                <label class="form-check-label" for="inlineRadio5">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio5" id="inlineRadio4" value="option53">
                                <label class="form-check-label" for="inlineRadio5">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio5" id="inlineRadio5" value="option54">
                                <label class="form-check-label" for="inlineRadio5">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio5" id="inlineRadio5" value="option55">
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Esu patenkintas saugia mokymosi aplinka</th>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio6" id="inlineRadio6" value="option61">
                                <label class="form-check-label" for="inlineRadio4">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio6" id="inlineRadio6" value="option62">
                                <label class="form-check-label" for="inlineRadio4">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio6" id="inlineRadio6" value="option63">
                                <label class="form-check-label" for="inlineRadio4">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio6" id="inlineRadio6" value="option64">
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadio6" id="inlineRadio6" value="option65">
                                <label class="form-check-label" for="inlineRadio4">5</label>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <h4>3. Kiek bendrai esate patenkinta(s) dalyko turinio ir dėstymo kokybe?</h4>
                <p>Įvertinkite modulio kokybę kaip įvairių Jums asmeniškai svarbių aspektų visumą balais nuo 1 iki 10, kai 1 - visiškai nepatenkinta(s), 10 - absoliučiai patenkinta(s)</p>
                <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt" id="inlineRadioExt" value="optionext1">
                            <label class="form-check-label" for="inlineRadioExt">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadioExt" value="optionext2">
                            <label class="form-check-label" for="inlineRadioExt">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadioExt" value="optionext3">
                            <label class="form-check-label" for="inlineRadioExt">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadioExt" value="optionext4">
                            <label class="form-check-label" for="inlineRadioExt">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt" id="inlineRadioExt" value="optionext5">
                            <label class="form-check-label" for="inlineRadioExt">5</label>
                        </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioExt" id="inlineRadioExt" value="optionext6">
                        <label class="form-check-label" for="inlineRadioExt">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadioExt" value="optionext7">
                        <label class="form-check-label" for="inlineRadioExt">7</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadioExt" value="optionext8">
                        <label class="form-check-label" for="inlineRadioExt">8</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadioExt" value="optionext9">
                        <label class="form-check-label" for="inlineRadioExt">9</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioExt" id="inlineRadioExt" value="optionext10">
                        <label class="form-check-label" for="inlineRadioExt">10</label>
                    </div>
                </div>
                <div>
                    <h4>5.Jūsų pageidavimai ir pasiūlymai dėl šio kurso patobulinimo?</h4>
                    <input type="text">
                </div>
                <div>
                    <h4>6.Ar rekomenduotumėte mūsų mokyklą kitiems?</h4>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext21">
                            <label class="form-check-label" for="inlineRadioExt2">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext22">
                            <label class="form-check-label" for="inlineRadioExt2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext23">
                            <label class="form-check-label" for="inlineRadioExt2">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext24">
                            <label class="form-check-label" for="inlineRadioExt2">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext25">
                            <label class="form-check-label" for="inlineRadioExt2">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext26">
                            <label class="form-check-label" for="inlineRadioExt2">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext27">
                            <label class="form-check-label" for="inlineRadioExt2">7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext28">
                            <label class="form-check-label" for="inlineRadioExt2">8</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext29">
                            <label class="form-check-label" for="inlineRadioExt2">9</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioExt2" id="inlineRadioExt2" value="optionext30">
                            <label class="form-check-label" for="inlineRadioExt2">10</label>
                        </div>
                    </div>
                </div>
                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
