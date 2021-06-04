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
        {{method_field('PATCH')}}
        <fieldset {{ $pateikta == true ? 'disabled' : '' }}>
            <div class="page-heading">
                <h5>KAUNO INFORMACINIŲ TECHNOLOGIJŲ MOKYKLOS
                    MOKYTOJO IR PAGALBOS MOKINIUI SPECIALISTO VEIKLOS IR KVALIFIKACIJOS TOBULINIMO
                </h5>
            </div>
            <div class="form-group card">
                <div class="card-content">
                    <div class="card-body">
                        </ul>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-1 col-1"><label class="col-form-label"> 20-</label></div>
                            <div class="col-lg-1 col-1"><input class="form-control form-control-sm " type="text" name="dateOne" value="{{$update->dateOne}}"></div>
                            -
                            <div class="col-lg-1 col-1"><label class="col-form-label">20- </label></div>
                            <div class="col-lg-1 col-1"><input class="form-control form-control-sm" type="text" name="dateTwo" value="{{$update->dateTwo}}"></div>
                            <div class="col-lg-4 col-4"><label class="card-title">MOKSLO METAIS SAVIANALIZĖS ANKETA</label>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-5 col-5">
                                <input class="form-control" type="text" value="{{$name}}" name="name" readonly="readonly">
                            </div>
                            <div class="col-lg-5 col-5">
                                <input class="form-control" type="text" value="{{$surname}}" name="surname" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-5 col-5">
                                <label class="card-title">Pareigos</label>
                                <select class="form-select" name="role">
                                    <option value="Mokytojas" name="role" {{ ($update->role == "Mokytojas") ? 'selected' : '' }}>Mokytojas</option>
                                    <option value="Profesijos mokytojas" name="role" {{ ($update->role == "Profesijos mokytojas") ? 'selected' : '' }}>Profesijos mokytojas</option>
                                </select>
                            </div>
                            <div class="col-lg-5 col-5">
                                <label class="card-title">Kvalifikacinė kategorija</label>
                                <select class="form-select" name="category">
                                    <option value="Mokytojas(nesuteikta)" name="category" {{ ($update->category == "Mokytojas(nesuteikta)") ? 'selected' : '' }}>Mokytojas(nesuteikta)</option>
                                    <option value="Mokytojas(suteikta)" name="category" {{ ($update->category == "Mokytojas(suteikta)") ? 'selected' : '' }}>Mokytojas(suteikta)</option>
                                    <option value="Vyr.Mokytojas" name="category" {{ ($update->category == "Vyr.Mokytojas") ? 'selected' : '' }}>Vyr.Mokytojas</option>
                                    <option value="Metodininkas" name="category" {{ ($update->category == "Metodininkas") ? 'selected' : '' }}>Metodininkas</option>
                                    <option value="Ekspertas" name="category" {{ ($update->category == "Ekspertas") ? 'selected' : '' }}>Ekspertas</option>
                                </select>
                                <input class="form-control" type="text" name="work_experience" placeholder="Darbo stažas" value="{{$update->work_experience}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="text-danger">Kiekviena sritis vertinamas 1-10 balų</h6>
            <div class="card">
                <div class="card-header">
                    <h3>I sritis. Veiklos planavimas, tiesioginio darbo vykdymas</h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">
                            <label class=" card-title">1.1Kokie pagrindiniai iššūkiai organizuojant mokymo
                                procesą(išvardinkite)?</label>
                            <div class="  ">
                                <input class="form-control" type="text" name="firstChallenge" placeholder="pirmas iššukis" value="{{($update->{'1_1_first'})}}">
                                <input class="form-control" type="text" name="secondChallenge" placeholder="antras iššukis" value="{{($update->{'1_1_second'})}}">
                                <input class="form-control" type="text" name="thirdChallenge" placeholder="trecias iššukis" value="{{($update->{'1_1_third'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.2. Aprašykite gerąją mokymo proceso organizavimo patirtį,
                                pasiekimus. </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="training_organization_experience_achievements" value="{{($update->{'1_2'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.3. Kokie priimti sprendimai, turėjo įtakos mokymo kokybės
                                gerinimui? </label>
                            <div class=" col-md-8 ">
                                <input class="form-control" type="text" name="quality_of_teaching" value="{{($update->{'1_3'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.4. Kokios buvo kilusios problemos ir kokiais sprendimais jas
                                pavyko išspręsti? </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="problems_and_solutions" value="{{($update->{'1_4'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">
                                1.5. Kokiose bendruomenės narių veiklose dalyvavote sprendžiant iniciatyvumo ir
                                atsakomybės,
                                įstaigos veiklos
                                tobulinimo, planavimo, sprendimų priėmimo ir jų įgyvendinimo pokyčius</label>
                            <div class="  ">
                                <textarea class="form-control" type="text" name="participated_acts">{{($update->{'1_5'})}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.6 Parengtų arba atnaujintų veiklos planų,
                                individualių/dalyko, integruoto ugdymo programų/planų
                                skaičius (įrašykite): </label>
                            <div class="  ">
                                <input class="form-control" type="number" name="number_of_plans" value="{{($update->{'1_6'})}}">
                                <p class="text-muted">Išvardinkite svarbiausius planus, kuriuos esate parengęs: </p>
                                <input class="form-control" type="text" name="firstPlan" placeholder="pirmas planas" value="{{($update->{'1_6_first'})}}">
                                <input class="form-control" type="text" name="secondPlan" placeholder="antras planas" value="{{($update->{'1_6_second'})}}">
                                <input class="form-control" type="text" name="thirdPlan" placeholder="trecias planas" value="{{($update->{'1_6_third'})}}">
                                <p class="text-muted">Nurodykite, kur patalpinti dalyko/modulio teminiai planai </p>
                                <input class="form-control" type="text" name="link_to_plans" value="{{($update->{'1_6_link'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.7. Kokias priemones ir būdus taikote planuojant ugdymo
                                turinį ir išsiaiškinti mokinių
                                mokymosi
                                poreikius ir
                                pasiekimus. Išvardinkite </label>
                            <div class=" c ">
                                <textarea class="form-control" type="text" name="tools_and_methods">{{($update->{'1_7'})}}</textarea>
                                <p class="text-muted">Išvardinkite svarbiausius: </p>
                                <input class="form-control" type="text" name="first_tool_or_method" value="{{($update->{'1_7_first'})}}">
                                <input class="form-control" type="text" name="second_tool_or_method" value="{{($update->{'1_7_second'})}}">
                                <input class="form-control" type="text" name="third_tool_or_method" value="{{($update->{'1_7_third'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.8. Ar organizuojama pedagoginė, psichologinė ir kita
                                pagalba mokiniui, ar ji teikiama
                                tinkamai
                                ir ar yra
                                savalaikė. Pateikite pavyzdžių. </label>
                            <div class="  ">
                                <textarea class="form-control" type="text" name="student_assistance">{{($update->{'1_8'})}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.9. Kokius mokymosi būdus bei metodus taikote pamokose,
                                skatinančias mokinius savarankiškai
                                mokytis: </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="first_method_for_self_directed_learning" value="{{($update->{'1_9_first'})}}">
                                <input class="form-control" type="text" name="second_method_for_self_directed_learning" value="{{($update->{'1_9_second'})}}">
                                <input class="form-control" type="text" name="third_method_for_self_directed_learning" value="{{($update->{'1_9_third'})}}">
                                <p class="text-muted">Kas pasisekė </p>
                                <input class="form-control" type="text" name="luck" value="{{($update->{'1_9_success'})}}">
                                <p class="text-muted">Kokių patyrėte sunkumų </p>
                                <input class="form-control" type="text" name="difficulties" value="{{($update->{'1_9_failure'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.10. Kur patalpinate mokymo(si) medžiagą, kurią esate
                                parengęs pamokoms ir/ar
                                diferencijuotam
                                mokymui . </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Moodle aplinkoje </label>
                                            <input class="form-check-input" type="checkbox" value="Moodle" name="material[]" id="Moodle" {{$update->{'1_10'} == null ? '' : (str_contains($update->{'1_10'}, "Moodle") ? 'checked' : '')}}>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">MS Teams aplinkoje </label>
                                            <input class="form-check-input" type="checkbox" value="MS Teams" name="material[]" id="Teams" {{$update->{'1_10'} == null ? '' : (str_contains($update->{'1_10'}, "MS Teams") ? 'checked' : '')}}>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Google diske</label>
                                            <input class="form-check-input" type="checkbox" value="Google diske" name="material[]" id="Google" {{$update->{'1_10'} == null ? '' : (str_contains($update->{'1_10'}, "Google diske") ? 'checked' : '')}}>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Eduka aplinkoje </label>
                                            <input class="form-check-input" type="checkbox" value="Eduka" name="material[]" id="Eduka" {{$update->{'1_10'} == null ? '' : (str_contains($update->{'1_10'}, "Eduka") ? 'checked' : '')}}>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Gitlab kodo saugykla </label>
                                            <input class="form-check-input" type="checkbox" value="Gitlab" name="material[]" id="Gitlab" {{$update->{'1_10'} == null ? '' : (str_contains($update->{'1_10'}, "Gitlab") ? 'checked' : '')}}>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Ftp paslauga </label>
                                            <input class="form-check-input" type="checkbox" value="Ftp" name="material[]" id="Ftp" {{$update->{'1_10'} == null ? '' : (str_contains($update->{'1_10'}, "Ftp") ? 'checked' : '')}}>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Siunčiu į el.paštą </label>
                                            <input class="form-check-input" type="checkbox" value="El.paštas" name="material[]" id="Teams" {{$update->{'1_10'} == null ? '' : (str_contains($update->{'1_10'}, "El.paštas") ? 'checked' : '')}}>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Dalinuosi facebook grupėje </label>
                                            <input class="form-check-input" type="checkbox" value="Facebook grupė" name="material[]" id="Teams" {{$update->{'1_10'} == null ? '' : (str_contains($update->{'1_10'}, "Facebook grupė") ? 'checked' : '')}}>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">

                                            <input class="form-control" type="text" name="other_material" placeholder="Kita(įrašykite)" value="{{($update->{'1_10_other'})}}">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.11. Kokiais jūsų dėstomo dalyko šių mokslo metų mokinių įgytais
                                gebėjimai, rezultatais
                                ugdomosios veiklos
                                darbais, veiklomis džiaugiatės (išvardinkite) </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="first_happiness_for_good_student" value="{{($update->{'1_11_first'})}}">
                                <input class="form-control" type="text" name="second_happiness_for_good_student" value="{{($update->{'1_11_second'})}}">
                                <input class="form-control" type="text" name="third_happiness_for_good_student" value="{{($update->{'1_11_third'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.12. Kokiuose dalyvavote konkursuose konkursuose, projektuose,
                                parodose (ne mokykloje)
                                individualiai arba su
                                ugdytiniais (išvardinkite) </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="competitions" value="{{($update->{'1_12'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title"> 1.13. BU mokytojams. Kiek mokinių pasirinko Jūsų dalyko
                                valstybinį egzaminą (įrašykite
                                skaičių) </label>
                            <div class="  ">
                                <input class="form-control" type="number" name="pass_an_exam" placeholder="Kiek egzaminą išlaikė" value="{{($update->{'1_13_islaike'})}}">
                                <input class="form-control" type="number" name="didnt_pass_an_exam" placeholder="Kiek egzamino neišlaikė" value="{{($update->{'1_13_neislaike'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.14. Profesijos mokytojams. Kiek mokinių pasirinko iš Jūsų
                                dalyko atlikti mokyklinį
                                technologijų
                                egzaminą? </label>
                            <div class="  ">
                                <input class="form-control" type="number" name="number_of_students" value="{{($update->{'1_14_nr'})}}">
                                <input class="form-control" type="number" name="pass_an_exam_technology" placeholder="Kiek egzaminą išlaikė " value="{{($update->{'1_14_islaike'})}}">
                                <input class="form-control" type="number" name="didnt_pass_an_exam_technology" placeholder="Kiek egzamino neišlaikė " value="{{($update->{'1_14_neislaike'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.15. Praktikos vadovams. Kokiam mokinių skaičiui vadovauta
                                praktikai</label>
                            <div class="  ">
                                <input class="form-control" type="number" name="guided_practice" placeholder="įrašykite" value="{{($update->{'1_15_nr'})}}">

                                <label class="col-md-12">Žinios apie mokinių praktikos vietas (pasirinkite) </label>
                                <input class="form-control" type="number" name="practise_in_companies" placeholder="Mokinių, atlikusių praktiką įmonėse skaičius " value="{{($update->{'1_15_1'})}}">
                                <input class="form-control" type="number" name="practise_apprenticeships" placeholder="Mokinių, atlikusių praktiką pameistrystės mokymosi forma skaičius  " value="{{($update->{'1_15_2'})}}">
                                <input class="form-control" type="number" name="practise_in_school" placeholder="Mokinių, atlikusių praktiką mokykloje skaičius  " value="{{($update->{'1_15_3'})}}">
                                <input class="form-control" type="number" name="practise_with_project_works" placeholder="Mokinių, praktikos metų atlikusių projektinius darbus skaičius " value="{{($update->{'1_15_4'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.16. Žinios apie absolventus. Absolventų skaičius Iš
                                jų: </label>
                            <div class="  ">
                                <input class="form-control" type="number" name="Continue_studying_at_a_college_or_university" placeholder="Tęsia mokymąsi kolegijoje ar universitete (kiek) " value="{{($update->{'1_16_1'})}}">
                                <input class="form-control" type="number" name="Employed" placeholder="Įsidarbino (kiek) " value="{{($update->{'1_16_2'})}}">
                                <input class="form-control" type="number" name="not_working_not_studying" placeholder="Nedirba, nesimoko (kiek)  " value="{{($update->{'1_16_3'})}}">
                                <input class="form-control" type="number" name="Signed_up_for_UT" placeholder="Užsiregistravo UT (kiek)  " value="{{($update->{'1_16_4'})}}">
                                <input class="form-control" type="number" name="Went_abroad" placeholder="Išvyko į užsienį (kiek) " value="{{($update->{'1_16_5'})}}">
                                <input class="form-control" type="text" name="other" placeholder="Kita (nurodykite) " value="{{($update->{'1_16_6'})}}">
                                <input class="form-control" type="number" name="no_data" placeholder="Nėra duomenų (kiek) " value="{{($update->{'1_16_7'})}}">
                                <input class="form-control" type="text" name="data_not_provided" placeholder="Duomenys nepateikti (nurodykite priežastį) " value="{{($update->{'1_16_8'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.17. Pateikite darbdavių atsiliepimus apie pasitenkinimą
                                absolventų įgytomis
                                kompetencijomis </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="employer_reviews" value="{{($update->{'1_17'})}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.18. Pateikite absolventų atsiliepimus apie jų pasitenkinimą
                                įgyta kvalifikacija 5.2.5 </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="graduate_reviews" value="{{($update->{'1_18'})}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>II sritis. Bendravimas, bendradarbiavimas ir veikla institucijos bendruomenėje. </h3>
                </div>
                <div class="card-content">
                    <div class="card-body form-group">
                        <label class="card-title">2.1. Išvardinkite projektus, kuriuose dalyvavote ir savo vaidmenį
                            juose </label>
                        <select class="form-control" name="projects">
                            @foreach ($qualifications as $item)
                            <option name="projects" value="{{$item->seminar}}" {{ ($update->{'2_1'} == "$item->seminar") ? 'selected' : '' }}>{{$item->seminar}}</option>
                            @endforeach
                        </select>
                        <input class="form-control" type="text" name="project_name" placeholder="projekto rengėjas (nurodykite projekto pavadinimą) " value="{{($update->{'2_1_1'})}}">
                        <input class="form-control" type="text" name="project_coordinator" placeholder="projekto koordinatorius (nurodykite projekto pavadinimą) " value="{{($update->{'2_1_2'})}}">
                        <input class="form-control" type="text" name="project_executor" placeholder="projekto vykdytojas (nurodykite projekto pavadinimą)  " value="{{($update->{'2_1_3'})}}">
                        <label class="card-title">2.2. Pravestų profesinio orientavimo susitikimų skaičius (KITM
                            renginiai, susitikimai BU
                            mokyklose)... </label>
                        <input class="form-control" type="number" name="number_of_career_guidance_meetings" value="{{($update->{'2_2'})}}">
                        <label class="card-title">2.3. Pravestų nuotolinių pamokų 7-12 klasių mokiniams
                            skaičius </label>
                        <input class="form-control" type="number" name="number_of_distance_learning_lessons_for_students_in_grades_7_12" value="{{($update->{'2_3'})}}">
                        <p class="text-muted">
                            2.4 Metodinė veikla mokykloje, pagalba kolegoms. Išvardinkite veiklas</label>
                            <input class="form-control" type="text" name="first_activity" value="{{($update->{'2_4_1'})}}">
                            <input class="form-control" type="text" name="second_activity" value="{{($update->{'2_4_2'})}}">
                            <input class="form-control" type="text" name="third_activity" value="{{($update->{'2_4_3'})}}">
                            <label class="card-title">
                                2.5. Grupės vadovo veikla, bendravimas su tėvais, mokinių
                                pasitenkinimas Kas pasisekė: </label>
                            <input class="form-control" type="text" name="first_group_leader_activities_luck" value="{{($update->{'2_5_1'})}}">
                            <input class="form-control" type="text" name="second_group_leader_activities_luck" value="{{($update->{'2_5_2'})}}">
                            <input class="form-control" type="text" name="third_group_leader_activities_luck" value="{{($update->{'2_5_3'})}}">
                            <label class="card-title">Kokių turėjote problemų </label>
                            <input class="form-control" type="text" name="first_problem" value="{{($update->{'2_5_4'})}}">
                            <input class="form-control" type="text" name="second_problem" value="{{($update->{'2_5_5'})}}">
                            <input class="form-control" type="text" name="third_problem" value="{{($update->{'2_5_6'})}}">
                            <label class="card-title">2.6. Grupės vadovo veikla - mokinių nubyrėjimas </label>
                        <p class="card-title text-muted">Kiek mokinių įstojo į I kursą: </p>
                        <input class="form-control" type="number" name="students_in_first_year" value="{{($update->{'2_6_1'})}}">
                        <p class="card-title text-muted">Kiek mokinių mokosi šiuo metu (baigė)</p>
                        <input class="form-control" type="number" name="students_studying_or_graduated" value="{{($update->{'2_6_2'})}}">
                        <label class="card-title">2.7. Įvardinkite mokinių „nubyrėjimo“ priežastis ir kaip jas
                            sprendžiate </label>
                        <textarea class="form-control" type="text" name="The_cause_of_the_fall">{{($update->{'2_7'})}}</textarea>
                        <label class="card-title">2.8. Kaip informaciją pateikiate ir aptariate ją su mokinių tėvais
                            (globėjais, rūpintojais),
                            kolegomis,
                            kitais
                            suinteresuotais asmenimis? </label>
                        <input class="form-control" type="text" name="first_provision_of_information" value="{{($update->{'2_8_1'})}}">
                        <input class="form-control" type="text" name="second_provision_of_information" value="{{($update->{'2_8_2'})}}">
                        <input class="form-control" type="text" name="third_provision_of_information" value="{{($update->{'2_8_3'})}}">
                        <label class="card-title">2.9. Jūsų (kaip grupės vadovo) naudojami mokinių motyvavimo mokytis ir
                            lankyti pamokas būdai ir
                            priemonės </label>
                        <input class="form-control" type="text" name="first_student_motivation" value="{{($update->{'2_9_1'})}}">
                        <input class="form-control" type="text" name="second_student_motivation" value="{{($update->{'2_9_2'})}}">
                        <input class="form-control" type="text" name="third_student_motivation" value="{{($update->{'2_9_3'})}}">
                        <label class="card-title">2.10. Dalyvavimas mokyklos socialiniame kultūriniame gyvenime. Jūsų
                            suorganizuoti renginiai
                            mokykloje, kita
                            popamokinė veikla (mokiniams arba mokytojams). </label>
                        <input class="form-control" type="text" name="first_events_and_extracurricular_activities" value="{{($update->{'2_10_1'})}}">
                        <input class="form-control" type="text" name="second_events_and_extracurricular_activities" value="{{($update->{'2_10_2'})}}">
                        <input class="form-control" type="text" name="third_events_and_extracurricular_activities" value="{{($update->{'2_10_3'})}}">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>III sritis. Asmeninis profesinis tobulėjimas.</h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-title text-muted">Kvalifikacijos kėlimas mažiau kaip 5 dienas (30 val.) per
                            mokslo metus </p>
                        <input class="form-control" type="number" name="training" value="{{ $pateikta == true ? $update->{'3_hours'} : $hourscore }}"  readonly="readonly">
                        <p class="text-muted text-decoration-underline">Už kiekvieną dieną (6 valandas) 1 balas </p>
                    </div>
                    <div class="card-body">
                        <p>I sritis</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="1" {{ ($update->{'3_I'} =="1") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="2" {{ ($update->{'3_I'} =="2") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="3" {{ ($update->{'3_I'} =="3") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="4" {{ ($update->{'3_I'} =="4") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="5" {{ ($update->{'3_I'} =="5") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="6" {{ ($update->{'3_I'} =="6") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="7" {{ ($update->{'3_I'} =="7") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="8" {{ ($update->{'3_I'} =="8") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">8</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="9" {{ ($update->{'3_I'} =="9") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">9</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="I_score" id="inlineRadioExt2" value="10" {{ ($update->{'3_I'} =="10") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">10</label>
                        </div>
                    </div>

                    <div class="card-body">
                        <p>II sritis</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="1" {{ ($update->{'3_II'} =="1") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="2" {{ ($update->{'3_II'} =="2") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="3" {{ ($update->{'3_II'} =="3") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="4" {{ ($update->{'3_II'} =="4") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="5" {{ ($update->{'3_II'} =="5") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="6" {{ ($update->{'3_II'} =="6") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="7" {{ ($update->{'3_II'} =="7") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="8" {{ ($update->{'3_II'} =="8") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">8</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="9" {{ ($update->{'3_II'} =="9") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">9</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="II_score" id="inlineRadioExt2" value="10" {{ ($update->{'3_II'} =="10") ? 'checked' : '' }}>
                            <label class="form-check-label" for="inlineRadioExt2">10</label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p>III sritis.</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="1" {{ ($update->{'3_III'} =="1") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="2" {{ ($update->{'3_III'} =="2") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="3" {{ ($update->{'3_III'} =="3") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="4" {{ ($update->{'3_III'} =="4") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="5" {{ ($update->{'3_III'} =="5") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="6" {{ ($update->{'3_III'} =="6") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">6</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="7" {{ ($update->{'3_III'} =="7") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">7</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="8" {{ ($update->{'3_III'} =="8") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">8</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="9" {{ ($update->{'3_III'} =="9") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">9</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="III_score" id="inlineRadioExt2" value="10" {{ ($update->{'3_III'} =="10") ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadioExt2">10</label>
                    </div>
                </div>
                <h4>VEIKLOS ĮSIVERTINIMAS BALŲ: </h4>
                <p class="card-title text-muted">Surinktų balų suma: <input class="form-control" type="number" name="final_score" value="{{($update->{'3_sum'})}}"></p>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>IV. BAIGIAMOJI DALIS </h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">
                            <p label class="card-title">4.1. Aprūpinimas materialiaisiais ištekliais </p>

                            <label class="card-title ">Pedagogo dalyvavimas formuojant ilgalaikius materialiųjų išteklių
                                modernizavimo tikslus </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="teacher_participation" {{ ($update->{'4_1_1'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="teacher_participation" {{ ($update->{'4_1_1'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="teacher_participation" {{ ($update->{'4_1_1'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="teacher_participation" {{ ($update->{'4_1_1'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="teacher_participation" {{ ($update->{'4_1_1'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>

                            <label class="card-title ">Pagrindinių materialiųjų išteklių nėra ar nepakanka </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="no_insufficient_basic_material_resources" {{ ($update->{'4_1_2'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="no_insufficient_basic_material_resources" {{ ($update->{'4_1_2'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="no_insufficient_basic_material_resources" {{ ($update->{'4_1_2'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="no_insufficient_basic_material_resources" {{ ($update->{'4_1_2'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="no_insufficient_basic_material_resources" {{ ($update->{'4_1_2'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title ">Materialiųjų išteklių modernumas ir atitiktis darbo rinkos
                                poreikiams </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="modernity_of_material_resources" {{ ($update->{'4_1_3'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="modernity_of_material_resources" {{ ($update->{'4_1_3'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="modernity_of_material_resources" {{ ($update->{'4_1_3'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="modernity_of_material_resources" {{ ($update->{'4_1_3'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="modernity_of_material_resources" {{ ($update->{'4_1_3'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title">Mokykloje analizuojamas materialiųjų išteklių pakankamumas ir
                                prieinamumas mokiniams ir
                                pedagogams </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="availability_of_material_resources_for_students_and_teachers" {{ ($update->{'4_1_4'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="availability_of_material_resources_for_students_and_teachers" {{ ($update->{'4_1_4'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="availability_of_material_resources_for_students_and_teachers" {{ ($update->{'4_1_4'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="availability_of_material_resources_for_students_and_teachers" {{ ($update->{'4_1_4'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="availability_of_material_resources_for_students_and_teachers" {{ ($update->{'4_1_4'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title">Mokyklos biblioteka aprūpinta moderniais materialiaisiais
                                ištekliais </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="school_library_with_modern_material_resources" {{ ($update->{'4_1_5'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="school_library_with_modern_material_resources" {{ ($update->{'4_1_5'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="school_library_with_modern_material_resources" {{ ($update->{'4_1_5'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="school_library_with_modern_material_resources" {{ ($update->{'4_1_5'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="school_library_with_modern_material_resources" {{ ($update->{'4_1_5'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title">Kokius naujos jums svarbius metodinių išteklių įsigijimo atvejus
                                galėtumėte išskirti kaip
                                reikšmingiausius
                                Jūsų
                                institucijoje? </label>
                            <textarea class="form-control" type="text" name="the_most_significant_resources">{{ ($update->{'4_1_6'}) }}</textarea>
                            <div class="form-group"><label class="card-title"> 4.2. Pedagogų pasitenkinimas darbo
                                    sąlygomis</label></div>
                            <label class="card-title text-muted">Mokyklos mikroklimatas 2.1.3 </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="school_microclimate" {{ ($update->{'4_2_1'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="school_microclimate" {{ ($update->{'4_2_1'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="school_microclimate" {{ ($update->{'4_2_1'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="school_microclimate" {{ ($update->{'4_2_1'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="school_microclimate" {{ ($update->{'4_2_1'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title text-muted">Apmokėjimo už darbą sistemos skaidrumas </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="transparency_of_the_pay_system" {{ ($update->{'4_2_2'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="transparency_of_the_pay_system" {{ ($update->{'4_2_2'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="transparency_of_the_pay_system" {{ ($update->{'4_2_2'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="transparency_of_the_pay_system" {{ ($update->{'4_2_2'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="transparency_of_the_pay_system" {{ ($update->{'4_2_2'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title text-muted">Materialios darbo sąlygos</label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="material_working_conditions" {{ ($update->{'4_2_3'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="material_working_conditions" {{ ($update->{'4_2_3'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="material_working_conditions" {{ ($update->{'4_2_3'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="material_working_conditions" {{ ($update->{'4_2_3'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="material_working_conditions" {{ ($update->{'4_2_3'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title text-muted">Darbo santykiai </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="work_relations" {{ ($update->{'4_2_4'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="work_relations" {{ ($update->{'4_2_4'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="work_relations" {{ ($update->{'4_2_4'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="work_relations" {{ ($update->{'4_2_4'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="work_relations" {{ ($update->{'4_2_4'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title text-muted">Psichologinis klimatas </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="psychological_climate" {{ ($update->{'4_2_5'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="psychological_climate" {{ ($update->{'4_2_5'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="psychological_climate" {{ ($update->{'4_2_5'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="psychological_climate" {{ ($update->{'4_2_5'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>

                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="psychological_climate" {{ ($update->{'4_2_5'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title text-muted">Tiesioginio darbo proceso įgyvendinimas </label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="implementation_of_direct_work_process" {{ ($update->{'4_2_6'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="implementation_of_direct_work_process" {{ ($update->{'4_2_6'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="implementation_of_direct_work_process" {{ ($update->{'4_2_6'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="implementation_of_direct_work_process" {{ ($update->{'4_2_6'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>

                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="implementation_of_direct_work_process" {{ ($update->{'4_2_6'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <label class="card-title text-muted">Veiksmingi ryšiai su mokiniais, kolegomis, tėvais,
                                vietos bendruomenės nariais.</label>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" value="1" name="effective_communication" {{ ($update->{'4_2_7'} =="1") ? 'checked' : '' }}>
                                        <label class="text-danger"> Tikrai nepritariu (1)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" value="2" name="effective_communication" {{ ($update->{'4_2_7'} =="2") ? 'checked' : '' }}>
                                        <label class="text-Secondary"> Nepritariu (2)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" value="3" name="effective_communication" {{ ($update->{'4_2_7'} =="3") ? 'checked' : '' }}>
                                        <label class="text-Primary"> Nei nepritariu, nei pritariu (3)</label>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" value="4" name="effective_communication" {{ ($update->{'4_2_7'} =="4") ? 'checked' : '' }}>
                                        <label class="text-Warning"> Pritariu (4)</label>
                                    </div>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input " type="radio" value="5" name="effective_communication" {{ ($update->{'4_2_7'} =="5") ? 'checked' : '' }}>
                                        <label class="text-Success"> Tikrai pritariu (5)</label>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-group"><label class="card-title">4.3. Pedagogo</label><input class="form-control" type="text" name="pedagogues" value="{{($update->{'4_3_1'})}}"></div>
                            <label class="card-title text-muted">Koks Svarbiausias asmeninis šių metų profesinis
                                pasiekimas (patirtis)? </label>
                            <input class="form-control" type="text" name="the_most_important_achievement" value="{{($update->{'4_3_2'})}}">
                            <label class="card-title text-muted">Koks nemaloniausias šių metų įvykis
                                (patirtis)? </label>
                            <input class="form-control" type="text" name="most_unpleasant_event" value="{{($update->{'4_3_3'})}}">
                            <label class="card-title text-muted">Kurių funkcijų ar darbų norėtumėte atsisakyti ateityje?
                                Pagrįskite. </label>
                            <input class="form-control" type="text" name="feature_waiver" value="{{($update->{'4_3_4'})}}">
                            <label class="card-title text-muted">Kokias kompetencijas Jūs turėtumėte tobulinti
                                ateinančiais metais? Kokia reikalinga pagalba? </>
                                <input class="form-control" type="text" name="improvements_and_support" value="{{($update->{'4_3_5'})}}">
                                <label class="card-title text-muted">Kokis sritys, kuriose labiausiai susiduriu su
                                    problemomis </label>
                                <input class="form-control" type="text" name="problematic_areas" value="{{($update->{'4_3_6'})}}">
                                <label class="card-title text-muted">Ką tiesioginis vadovas turėtų tobulinti savo
                                    sprendimuose ar elgsenoje, kad jūsų veiklos
                                    rezultatas būtų
                                    geresnis? </label>
                                <input class="form-control" type="text" name="what_should_manager_improve" value="{{($update->{'4_3_7'})}}">
                                <p class="card-title text-muted">Kokie institucijos veiksmai užtikrintų vykdomų programų
                                    populiarumą? </p>
                                <input class="form-control" type="text" name="popularity_of_programs" value="{{($update->{'4_3_8'})}}">
                                <p class="card-title text-muted">Kaip personalas vertina institucijos vadybą ir
                                    administravimą (2.1.3.) </p>
                                <input class="form-control" type="text" name="staff_evaluation" value="{{($update->{'4_3_9'})}}">
                                <p class="card-title text-muted">Grįžtamasis ryšys iš vadovų. Ar esate patenkintas
                                    bendravimu su institucijos administracija
                                    (parašykite
                                    komentarą) </p>
                                <input class="form-control" type="text" name="happiness_with_communication" value="{{($update->{'4_3_10'})}}">
                                <p class="card-title text-muted">Kuo galėtumėte būti naudingas mokyklai (veikla, nesusijusi
                                    su pareigybėmis)? </p>
                                <input class="form-control" type="text" name="how_can_I_benefit_the_school" value="{{($update->{'4_3_11'})}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <button type="submit" name="action" value="issaugoti" class="btn btn-success me-1 mb-1">Išsaugoti pakeitimus</button>
                </div>

                <div class="col ">
                    <button type="submit" name="action" value="pateikti" class="btn btn-primary me-1 mb-1" onclick="return confirm('Pateikus anketą nebegalėsite jos redaguoti. Ar tikrai norite užbaigti pildymą?')">Pateikti anketą</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>