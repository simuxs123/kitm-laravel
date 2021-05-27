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

    <form class="col" method="post" action="/storeAssessment">
        {{csrf_field()}}
        <h5>KAUNO INFORMACINIŲ TECHNOLOGIJŲ MOKYKLOS
            MOKYTOJO IR PAGALBOS MOKINIUI SPECIALISTO VEIKLOS IR KVALIFIKACIJOS TOBULINIMO
            20-<input class="form-control" type="text" name="dateOne">- 20-<input class="form-control" type="text" name="dateTwo"> MOKSLO METAIS SAVIANALIZĖS
            ANKETA
        </h5>
        <input class="form-control" type="text" name="name" placeholder="Vardas">
        <input class="form-control" type="text" name="surname" placeholder="Pavarde">
        <span>pareigos</span>
        <select name="role">
            <option value="Mokytojas">Mokytojas</option>
            <option value="Profesijos mokytojas">Profesijos mokytojas</option>
        </select>
        <span>Kvalifikacinė kategorija</span>
        <select name="category">
            <option value="Mokytojas(nesuteikta)">Mokytojas(nesuteikta)</option>
            <option value="Mokytojas(suteikta)">Mokytojas(suteikta)</option>
            <option value="Vyr.Mokytojas">Vyr.Mokytojas"</option>
            <option value="Metodininkas">Metodininkas</option>
            <option value="Ekspertas">Ekspertas</option>
        </select>
        <input class="form-control" type="text" name="work_experience" placeholder="Darbo stažas">

        <p>Kiekvienas kriterijus verinamas 0-1-2-3 balais</p>

        <div class="card">
            <div class="card-header">
                <h3>I sritis. Veiklos planavimas, tiesioginio darbo vykdymas</h3>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-4 card-title">1.1Kokie pagrindiniai iššūkiai organizuojant mokymo
                            procesą(išvardinkite)?</label>
                        <div class=" col-md-8 ">
                            <input class="form-control" type="text" name="firstChallenge" placeholder="pirmas iššukis">
                            <input class="form-control" type="text" name="secondChallenge" placeholder="antras iššukis">
                            <input class="form-control" type="text" name="thirdChallenge" placeholder="trecias iššukis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 card-title">1.2. Aprašykite gerąją mokymo proceso organizavimo patirtį,
                            pasiekimus. </label>
                        <div class=" col-md-8 ">
                            <input class="form-control" type="text" name="training_organization_experience_achievements">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 card-title">1.3. Kokie priimti sprendimai, turėjo įtakos mokymo kokybės
                            gerinimui? </label>
                        <div class=" col-md-8 ">
                            <input class="form-control" type="text" name="quality_of_teaching">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 card-title">1.4. Kokios buvo kilusios problemos ir kokias sprendimais jas
                            pavyko išspręsti? </label>
                        <div class=" col-md-8 ">
                            <input class="form-control" type="text" name="problems_and_solutions">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 card-title">
                            1.5. Kokiose bendruomenės narių veiklose dalyvavote sprendžiant iniciatyvumo ir atsakomybės,
                            įstaigos veiklos
                            tobulinimo, planavimo, sprendimų priėmimo ir jų įgyvendinimo pokyčius</label>
                        <div class=" col-md-8 ">
                            <textarea type="text" name="participated_acts"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.6 Parengtų arba atnaujintų veiklos planų,
                            individualių/dalyko, integruoto ugdymo programų/planų
                            skaičius (įrašykite): </label>
                        <div class=" col-md-8 ">
                            <input class="form-control" type="number" name="number_of_plans">
                            <p class="text-muted">Išvardinkite svarbiausius planus, kuriuos esate parengęs: </p>
                            <input class="form-control" type="text" name="firstPlan" placeholder="pirmas planas">
                            <input class="form-control" type="text" name="secondPlan" placeholder="antras planas">
                            <input class="form-control" type="text" name="thirdPlan" placeholder="trecias planas">
                            <p class="text-muted">Nurodykite, kur patalpinti dalyko/modulio teminiai planai </p>
                            <input class="form-control" type="text" name="link_to_plans">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.7. Kokias priemones ir būdus taikote planuojant ugdymo
                            turinį ir išsiaiškinti mokinių
                            mokymosi
                            poreikius ir
                            pasiekimus. Išvardinkite </label>
                        <div class=" col-md-8 ">
                            <textarea type="text" name="tools_and_methods"></textarea>
                            <p class="text-muted">Išvardinkite svarbiausius: </p>
                            <input class="form-control" type="text" name="first_tool_or_method">
                            <input class="form-control" type="text" name="second_tool_or_method">
                            <input class="form-control" type="text" name="third_tool_or_method">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.8. Ar organizuojama pedagoginė, psichologinė ir kita
                            pagalba mokiniui, ar ji teikiama
                            tinkamai
                            ir ar yra
                            savalaikė. Pateikite pavyzdžių. </label>
                        <div class=" col-md-8 ">
                            <textarea type="text" name="student_assistance"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.9. Kokius mokymosi būdus bei metodus taikote pamokose,
                            skatinančias mokinius savarankiškai
                            mokytis: </label>
                        <div class=" col-md-8 ">
                            <input class="form-control" type="text" name="first_method_for_self_directed_learning">
                            <input class="form-control" type="text" name="second_method_for_self_directed_learning">
                            <input class="form-control" type="text" name="third_method_for_self_directed_learning">
                            <p class="text-muted">Kas pasisekė </p>
                            <input class="form-control" type="text" name="luck">
                            <p class="text-muted">Kokių patyrėte sunkumų </p>
                            <input class="form-control" type="text" name="difficulties">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.10. Kur patalpinate mokymo(si) medžiagą, kurią esate
                            parengęs pamokoms ir/ar
                            diferencijuotam
                            mokymui . </label>
                        <div class="col-md-12 ">
                            <table class="table ">
                                        <tbody>
                                        <tr>
                                            <th><span>Moodle aplinkoje </span>
                                                <input class="form-control" type="checkbox" value="Moodle aplinkoje" name="Moodle">
                                            </th>
                                            <th><span>MS Teams aplinkoje </span>
                                                <input class="form-control" type="checkbox" value="MS Teams aplinkoje " name="Teams">
                                            </th>
                                            <th><span>Google diske </span>
                                                <input class="form-control" type="checkbox" value="Google diske " name="Google_disk"></th>
                                            <th><span>Eduka aplinkoje </span>
                                                <input class="form-control" type="checkbox" value="Eduka aplinkoje " name="Eduka"></th>
                                            <th><span>Gitlab kodo saugykla </span>
                                                <input class="form-control" type="checkbox" value="Gitlab kodo saugykla " name="Gitlab"></th>
                                            <th><span>Ftp paslauga </span>
                                                <input class="form-control" type="checkbox" value="Ftp paslauga " name="Ftp"></th>
                                            <th><span>Siunčiu į el.paštą </span>
                                                <input class="form-control" type="checkbox" value="Siunčiu į el.paštą " name="send_gmail">
                                            </th>
                                            <th><span>Dalinuosi facebook grupėje </span>
                                                <input class="form-control" type="checkbox" value="Dalinuosi facebook grupėje "
                                                       name="Facebook"></th>
                                            <th><input class="form-control" type="text" name="other_for_learning_material"
                                                       placeholder="Kita(įrašykite)"></th>
                                        </tr>
                                        </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.11. Kokiais jūsų dėstomo dalyko šių mokslo metų mokinių įgytais gebėjimai, rezultatais
                            ugdomosios veiklos
                            darbais, veiklomis džiaugiatės (išvardinkite) </label>
                        <div class=" col-md-8 ">
                        <input class="form-control" type="text" name="first_happiness_for_good_student">
                        <input class="form-control" type="text" name="second_happiness_for_good_student">
                        <input class="form-control" type="text" name="third_happiness_for_good_student">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.12. Kokiuose dalyvavote konkursuose konkursuose, projektuose, parodose (ne mokykloje)
                            individualiai arba su
                            ugdytiniais (išvardinkite) </label>
                        <div class=" col-md-8 ">
                        <input class="form-control" type="text" name="competitions">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title"> 1.13. BU mokytojams. Kiek mokinių pasirinko Jūsų dalyko valstybinį egzaminą (įrašykite
                            skaičių) </label>
                        <div class=" col-md-8 ">
                        <input class="form-control" type="number" name="pass_an_exam" placeholder="Kiek egzaminą išlaikė ">
                        <input class="form-control" type="number" name="didnt_pass_an_exam" placeholder="Kiek egzamino neišlaikė ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.14. Profesijos mokytojams. Kiek mokinių pasirinko iš Jūsų dalyko atlikti mokyklinį
                            technologijų
                            egzaminą? </label>
                        <div class=" col-md-8 ">
                        <input class="form-control" type="number">
                        <input class="form-control" type="number" name="pass_an_exam_technology" placeholder="Kiek egzaminą išlaikė ">
                        <input class="form-control" type="number" name="didnt_pass_an_exam_technology"
                               placeholder="Kiek egzamino neišlaikė ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.15. Praktikos vadovams. Kokiam mokinių skaičiui vadovauta praktikai</label>
                        <div class=" col-md-8 ">
                        <input class="form-control" type="number" name="guided_practice" placeholder="įrašykite">

                        <label class="col-md-12">Žinios apie mokinių praktikos vietas (pasirinkite) </label>
                        <input class="form-control" type="number" name="practise_in_companies"
                               placeholder="Mokinių, atlikusių praktiką įmonėse skaičius ">
                        <input class="form-control" type="number" name="practise_apprenticeships"
                               placeholder="Mokinių, atlikusių praktiką pameistrystės mokymosi forma skaičius  ">
                        <input class="form-control" type="number" name="practise_in_school"
                               placeholder="Mokinių, atlikusių praktiką mokykloje skaičius  ">
                        <input class="form-control" type="number" name="practise_with_project_works"
                               placeholder="Mokinių, praktikos metų atlikusių projektinius darbus skaičius ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.16. Žinios apie absolventus. Absolventų skaičius Iš jų: </label>
                        <div class=" col-md-8 ">
                        <input class="form-control" type="number" name="Continue_studying_at_a_college_or_university"
                               placeholder="Tęsia mokymąsi kolegijoje ar universitete (kiek) ">
                        <input class="form-control" type="number" name="Employed" placeholder="Įsidarbino (kiek) ">
                        <input class="form-control" type="number" name="not_working_not_studying" placeholder="Nedirba, nesimoko (kiek)  ">
                        <input class="form-control" type="number" name="Signed_up_for_UT " placeholder="Užsiregistravo UT (kiek)  ">
                        <input class="form-control" type="number" name="Went_abroad" placeholder="Išvyko į užsienį (kiek) ">
                        <input class="form-control" type="text" name="other" placeholder="Kita (nurodykite) ">
                        <input class="form-control" type="number" name="no_data" placeholder="Nėra duomenų (kiek) ">
                        <input class="form-control" type="text" name="data_not_provided "
                               placeholder="Duomenys nepateikti (nurodykite priežastį) ">
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.17. Pateikite darbdavių atsiliepimus apie pasitenkinimą absolventų įgytomis
                            kompetencijomis </label>
                        <div class=" col-md-8 ">
                        <input class="form-control" type="text" name="employer_reviews">
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-8 card-title">1.18. Pateikite absolventų atsiliepimus apie jų pasitenkinimą įgyta kvalifikacija 5.2.5 </label>
                        <div class=" col-md-8 ">
                        <input class="form-control" type="text" name="graduate_reviews">
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>II. Bendravimas, bendradarbiavimas ir veikla institucijos bendruomenėje. </h3>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>Išvardinkite projektus, kuriuose dalyvavote ir savo vaidmenį juose </p>
                    <input class="form-control" type="text" name="projects">
                    <input class="form-control" type="text" name="project_name"
                           placeholder="projekto rengėjas (nurodykite projekto pavadinimą) ">
                    <input class="form-control" type="text" name="project_coordinator"
                           placeholder="projekto koordinatorius (nurodykite projekto pavadinimą) ">
                    <input class="form-control" type="text" name="project_executor"
                           placeholder="projekto vykdytojas (nurodykite projekto pavadinimą)  ">
                    <p>2.2. Pravestų profesinio orientavimo susitikimų skaičius (KITM renginiai, susitikimai BU
                        mokyklose)... </p>
                    <input class="form-control" type="number" name="number_of_career_guidance_meetings">
                    <p>2.3. Pravestų nuotolinių pamokų 7-12 klasių mokiniams skaičius </p>
                    <input class="form-control" type="number" name="number_of_distance_learning_lessons_for_students_in_grades_7-12">
                    <p>Metodinė veikla mokykloje, pagalba kolegoms. Išvardinkite veiklas</p>
                    <input class="form-control" type="text" name="first_activity">
                    <input class="form-control" type="text" name="second_activity">
                    <input class="form-control" type="text" name="third_activity">
                    <p>2.5. Grupės vadovo veikla, bendravimas su tėvais, mokinių pasitenkinimas Kas pasisekė: </p>
                    <input class="form-control" type="text" name="first_group_leader_activities_luck">
                    <input class="form-control" type="text" name="second_group_leader_activities_luck">
                    <input class="form-control" type="text" name="third_group_leader_activities_luck">
                    <p>Kokių turėjote problemų </p>
                    <input class="form-control" type="text" name="first_problem">
                    <input class="form-control" type="text" name="second_problem">
                    <input class="form-control" type="text" name="third_problem">
                    <p>2.6. Grupės vadovo veikla - mokinių nubyrėjimas </p>
                    <p>Kiek mokinių įstojo į I kursą: </p>
                    <input class="form-control" type="number" name="students_in_first_year">
                    <p>Kiek mokinių mokosi šiuo metu (baigė)</p>
                    <input class="form-control" type="number" name="students_studying_or_graduated">
                    <p>2.7. Įvardinkite mokinių „nubyrėjimo“ priežastis ir kaip jas sprendžiate </p>
                    <textarea type="text" name="The_cause_of_the_fall"></textarea>
                    <p>2.8. Kaip informaciją pateikiate ir aptariate ją su mokinių tėvais (globėjais, rūpintojais),
                        kolegomis,
                        kitais
                        suinteresuotais asmenimis? </p>
                    <input class="form-control" type="text" name="first_provision_of_information">
                    <input class="form-control" type="text" name="second_provision_of_information">
                    <input class="form-control" type="text" name="third_provision_of_information">
                    <p>2.9. Jūsų (kaip grupės vadovo) naudojami mokinių motyvavimo mokytis ir lankyti pamokas būdai ir
                        priemonės </p>
                    <input class="form-control" type="text" name="first_student_motivation">
                    <input class="form-control" type="text" name="second_student_motivation">
                    <input class="form-control" type="text" name="third_student_motivation">
                    <p>2.10. Dalyvavimas mokyklos socialiniame kultūriniame gyvenime. Jūsų suorganizuoti renginiai
                        mokykloje, kita
                        popamokinė veikla (mokiniams arba mokytojams). </p>
                    <input class="form-control" type="text" name="first_events_and_extracurricular_activities">
                    <input class="form-control" type="text" name="second_events_and_extracurricular_activities">
                    <input class="form-control" type="text" name="third_events_and_extracurricular_activities">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <b>III veiklos sritis. Asmeninis profesinis tobulėjimas </b>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>Kvalifikacijos kėlimas mažiau kaip 5 dienas (30 val.) per mokslo metus </p>
                    <input class="form-control" type="number" name="training" placeholder="valandų skaičius">
                    <p>Už kiekvieną dieną (6 valandas) 1 balas </p>
                    <h3>VEIKLOS ĮSIVERTINIMAS BALŲ: </h3>
                    <p>I SRITIS IŠ VISO<input class="form-control" type="number" name="I_score">
                    <p>Max 54 balai(-ų) </p>
                    <p>II SRITIS IŠ VISO<input class="form-control" type="number" name="II_score">
                    <p>Max 30 balai(-ų) </p>
                    <p>III SRITIS IŠ VISO<input class="form-control" type="number" name="III_score">
                    <p>Ne mažiau kaip 5 balai(-ų) </p>
                    <p>Surinktų balų suma: <input class="form-control" type="number" name="final_score">balai(-ų) </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>IV. BAIGIAMOJI DALIS </h3>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>4.1. Aprūpinimas materialiaisiais ištekliais </p>
                    <p>
                        Tikrai nepritariu (1)
                        Nepritariu (2)
                        Nei nepritariu, nei pritariu (3)
                        Pritariu (4)
                        Tikrai pritariu (5)
                    </p>
                    <p>Pedagogo dalyvavimas formuojant ilgalaikius materialiųjų išteklių modernizavimo tikslus </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="teacher_participation">
                    <input class="form-control" type="radio" value="Nepritariu" name="teacher_participation">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu" name="teacher_participation">
                    <input class="form-control" type="radio" value="Pritariu" name="teacher_participation">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="teacher_participation">
                    <p>Pagrindinių materialiųjų išteklių nėra ar nepakanka </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="no_insufficient_basic_material_resources">
                    <input class="form-control" type="radio" value="Nepritariu" name="no_insufficient_basic_material_resources">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu"
                           name="no_insufficient_basic_material_resources">
                    <input class="form-control" type="radio" value="Pritariu" name="no_insufficient_basic_material_resourcesv">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="no_insufficient_basic_material_resources">
                    <p>Materialiųjų išteklių modernumas ir atitiktis darbo rinkos poreikiams </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="modernity_of_material_resources">
                    <input class="form-control" type="radio" value="Nepritariu" name="modernity_of_material_resources">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu" name="modernity_of_material_resources">
                    <input class="form-control" type="radio" value="Pritariu" name="modernity_of_material_resources">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="modernity_of_material_resources">
                    <p>Mokykloje analizuojamas materialiųjų išteklių pakankamumas ir prieinamumas mokiniams ir
                        pedagogams </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu"
                           name="availability_of_material_resources_for_students_and_teachers">
                    <input class="form-control" type="radio" value="Nepritariu"
                           name="availability_of_material_resources_for_students_and_teachers">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu"
                           name="availability_of_material_resources_for_students_and_teachers">
                    <input class="form-control" type="radio" value="Pritariu"
                           name="availability_of_material_resources_for_students_and_teachers">
                    <input class="form-control" type="radio" value="Tikrai pritariu"
                           name="availability_of_material_resources_for_students_and_teachers">
                    <p>Mokyklos biblioteka aprūpinta moderniais materialiaisiais ištekliais </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="school_library_with_modern_material_resources">
                    <input class="form-control" type="radio" value="Nepritariu" name="school_library_with_modern_material_resources">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu"
                           name="school_library_with_modern_material_resources">
                    <input class="form-control" type="radio" value="Pritariu" name="school_library_with_modern_material_resources">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="school_library_with_modern_material_resources">
                    <p>Kokius naujos jums svarbius metodinių išteklių įsigijimo atvejus galėtumėte išskirti kaip
                        reikšmingiausius
                        Jūsų
                        institucijoje? </p>
                    <textarea type="text" name="the_most_significant_resources_in_the_institution"></textarea>
                    <p>4.2. Pedagogų pasitenkinimas darbo sąlygomis </p>
                    <p>Mokyklos mikroklimatas 2.1.3 </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="school_microclimate">
                    <input class="form-control" type="radio" value="Nepritariu" name="school_microclimate">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu" name="school_microclimate">
                    <input class="form-control" type="radio" value="Pritariu" name="school_microclimate">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="school_microclimate">
                    <p>Apmokėjimo už darbą sistemos skaidrumas </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="transparency_of_the_pay_system">
                    <input class="form-control" type="radio" value="Nepritariu" name="transparency_of_the_pay_system">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu" name="transparency_of_the_pay_system">
                    <input class="form-control" type="radio" value="Pritariu" name="transparency_of_the_pay_system">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="transparency_of_the_pay_system">
                    <p>Materialios darbo sąlygos</p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="material_working_conditions">
                    <input class="form-control" type="radio" value="Nepritariu" name="material_working_conditions">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu" name="material_working_conditions">
                    <input class="form-control" type="radio" value="Pritariu" name="material_working_conditions">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="material_working_conditions">
                    <p>Darbo santykiai </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="work_relations">
                    <input class="form-control" type="radio" value="Nepritariu" name="work_relations">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu" name="work_relations">
                    <input class="form-control" type="radio" value="Pritariu" name="work_relations">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="work_relations">
                    <p>Psichologinis klimatas </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="psychological_climate">
                    <input class="form-control" type="radio" value="Nepritariu" name="psychological_climate">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu" name="psychological_climate">
                    <input class="form-control" type="radio" value="Pritariu" name="psychological_climate">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="psychological_climate">
                    <p>Tiesioginio darbo proceso įgyvendinimas </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="implementation_of_direct_work_process">
                    <input class="form-control" type="radio" value="Nepritariu" name="implementation_of_direct_work_process">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu"
                           name="implementation_of_direct_work_process">
                    <input class="form-control" type="radio" value="Pritariu" name="implementation_of_direct_work_process">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="implementation_of_direct_work_process">
                    <p>Veiksmingi ryšiai su mokiniais, kolegomis, tėvais, vietos bendruomenės nariais. </p>
                    <input class="form-control" type="radio" value="Tikrai nepritariu" name="effective_communication">
                    <input class="form-control" type="radio" value="Nepritariu" name="effective_communication">
                    <input class="form-control" type="radio" value="Nei nepritariu, nei pritariu" name="effective_communication">
                    <input class="form-control" type="radio" value="Pritariu" name="effective_communication">
                    <input class="form-control" type="radio" value="Tikrai pritariu" name="effective_communication">
                    <p>4.3. Pedagogo<input class="form-control" type="text" name="pedagogues"></p>
                    <p>Koks Svarbiausias asmeninis šių metų profesinis pasiekimas (patirtis)? </p>
                    <input class="form-control" type="text" name="the_most_important_achievement">
                    <p>Koks nemaloniausias šių metų įvykis (patirtis)? </p>
                    <input class="form-control" type="text" name="most_unpleasant_event">
                    <p>Kurių funkcijų ar darbų norėtumėte atsisakyti ateityje? Pagrįskite. </p>
                    <input class="form-control" type="text" name="feature_waiver">
                    <p>Kokias kompetencijas Jūs turėtumėte tobulinti ateinančiais metais? Kokia reikalinga pagalba? </p>
                    <input class="form-control" type="text" name="improvements_and_support">
                    <p>Kokis sritys, kuriose labiausiai susiduriu su problemomis </p>
                    <input class="form-control" type="text" name="problematic_areas">
                    <p>Ką tiesioginis vadovas turėtų tobulinti savo sprendimuose ar elgsenoje, kad jūsų veiklos
                        rezultatas būtų
                        geresnis? </p>
                    <input class="form-control" type="text" name="what_should_manager_improve">
                    <p>Kokie institucijos veiksmai užtikrintų vykdomų programų populiarumą? </p>
                    <input class="form-control" type="text" name="popularity_of_programs">
                    <p>Kaip personalas vertina institucijos vadybą ir administravimą (2.1.3.) </p>
                    <input class="form-control" type="text" name="staff_evaluation">
                    <p>Grįžtamasis ryšys iš vadovų. Ar esate patenkintas bendravimu su institucijos administracija
                        (parašykite
                        komentarą) </p>
                    <input class="form-control" type="text" name="happiness_with_communication">
                    <p>Kuo galėtumėte būti naudingas mokyklai (veikla, nesusijusi su pareigybėmis)? </p>
                    <input class="form-control" type="text" name="how_can_I_benefit_the_school">
                </div>
            </div>
        </div>
        <h3>V. KURUOJANČIO VADOVO IŠVADOS, SIŪLYMAI IR NUMATOMA PAGALBA (pildo kuruojantis vadovas) </h3>
        <p>5.1.Kuruojančio vadovo stebėtų ir aptartų pamokų (veiklų) skaičius (kokiose grupėse ir kokiam tikslui) </p>
        <input class="form-control" type="text" name="first_number_of_lessons_discussed_by_the_supervisor">
        <input class="form-control" type="text" name="second_number_of_lessons_discussed_by_the_supervisor">
        <input class="form-control" type="text" name="third_number_of_lessons_discussed_by_the_supervisor">
        <p>5.2. Kuruojančio vadovo komentaras dėl veiklos ir siūlymai dėl veiklos, kvalifikacijos tobulinimo </p>
        <input class="form-control" type="text" name="managers_comment_on_activities_and_suggestions">
        <p>5.3. Kokią realią pagalbą kuruojantis vadovas numato teikti kitais mokslo metais (šis klausimas aptariamas su
            mokytoju ar pagalbos mokiniui specialistu)</p>
        <input class="form-control" type="text" name="assistance_in_the_next_school_year">
        <p>5.4. Kokios pagalbos Jums reikėtų, kad galėtumėte tobulinti ugdomąją veiklą, įgyvendinti sumanymus, ugdymo
            tikslus kitais mokslo metais? </p>
        <input class="form-control" type="text" name="first_help_which_I_need">
        <input class="form-control" type="text" name="second_help_which_I_need">
        <input class="form-control" type="text" name="third__help_which_I_need">
        <button type="submit" class="btn btn-primary me-1 mb-1">SUBMIT</button>
    </form>
</div>
