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
        <div class="page-heading">
            <h5>KAUNO INFORMACINIŲ TECHNOLOGIJŲ MOKYKLOS
                MOKYTOJO IR PAGALBOS MOKINIUI SPECIALISTO VEIKLOS IR KVALIFIKACIJOS TOBULINIMO
            </h5>
        </div>
        <div class="form-group card">
            <div class="card-content">
                <div class="card-body">
                    <div class="form-group d-flex">
                        <div class=""><label class="col-form-label"> 20</label></div>
                        <div class="col-lg-1 col-1"><input class="form-control form-control-sm " type="text"
                                                           name="dateOne"></div>
                        <div class=""><label class="col-form-label">-20 </label></div>
                        <div class="col-lg-1 col-1"><input class="form-control form-control-sm" type="text"
                                                           name="dateTwo"></div>
                        <div class="col-lg-4 col-4"><label class="card-title">MOKSLO METAIS SAVIANALIZĖS ANKETA</label>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-5 col-5">
                            <input class="form-control" type="text" name="name" placeholder="Vardas"></div>
                        <div class="col-lg-5 col-5">
                            <input class="form-control" type="text" name="surname" placeholder="Pavarde"></div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-5 col-5">
                    <label class="card-title">Pareigos</label>
                            <select class="form-select" name="role">
                                <option value="Mokytojas">Mokytojas</option>
                                <option value="Profesijos mokytojas">Profesijos mokytojas</option>
                            </select>
                        </div>
                            <div class="col-lg-5 col-5">
                            <label class="card-title">Kvalifikacinė kategorija</label>
                            <select class="form-select" name="category">
                                <option value="Mokytojas(nesuteikta)">Mokytojas(nesuteikta)</option>
                                <option value="Mokytojas(suteikta)">Mokytojas(suteikta)</option>
                                <option value="Vyr.Mokytojas">Vyr.Mokytojas"</option>
                                <option value="Metodininkas">Metodininkas</option>
                                <option value="Ekspertas">Ekspertas</option>
                            </select>
                            <input class="form-control" type="text" name="work_experience" placeholder="Darbo stažas">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <h6 class="">Kiekvienas kriterijus vertinamas 0-1-2-3 balais</h6>
            <div class="card">
                <div class="card-header">
                    <h3>I sritis. Veiklos planavimas, tiesioginio darbo vykdymas</h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">
                            <label class=" card-title">1.1Kokie pagrindiniai iššūkiai organizuojant mokymo
                                procesą(išvardinkite)?</label>
                            <div class="space mt-2"></div>
                            <div class="  ">
                                <input class="form-control" type="text" name="firstChallenge"
                                       placeholder="pirmas iššukis">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="secondChallenge"
                                       placeholder="antras iššukis">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="thirdChallenge"
                                       placeholder="trecias iššukis">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.2. Aprašykite gerąją mokymo proceso organizavimo patirtį,
                                pasiekimus. </label>
                            <div class="  ">
                                <input class="form-control" type="text"
                                       name="training_organization_experience_achievements">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" card-title">1.3. Kokie priimti sprendimai, turėjo įtakos mokymo kokybės
                                gerinimui? </label>
                            <div class=" col-md-8 ">
                                <input class="form-control" type="text" name="quality_of_teaching">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.4. Kokios buvo kilusios problemos ir kokias sprendimais jas
                                pavyko išspręsti? </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="problems_and_solutions">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">
                                1.5. Kokiose bendruomenės narių veiklose dalyvavote sprendžiant iniciatyvumo ir
                                atsakomybės,
                                įstaigos veiklos
                                tobulinimo, planavimo, sprendimų priėmimo ir jų įgyvendinimo pokyčius</label>
                            <div class="  ">
                                <textarea class="form-control" type="text" name="participated_acts"></textarea>
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.6 Parengtų arba atnaujintų veiklos planų,
                                individualių/dalyko, integruoto ugdymo programų/planų
                                skaičius (įrašykite): </label>
                            <div class="space mt-2"></div>
                            <div class="  ">
                                <input class="form-control" type="number" name="number_of_plans">
                                <p class="text-muted">Išvardinkite svarbiausius planus, kuriuos esate parengęs: </p>
                                <input class="form-control" type="text" name="firstPlan" placeholder="pirmas planas">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="secondPlan" placeholder="antras planas">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="thirdPlan" placeholder="trecias planas">
                                <div class="space mt-2"></div>
                                <p class="text-muted">Nurodykite, kur patalpinti dalyko/modulio teminiai planai </p>
                                <input class="form-control" type="text" name="link_to_plans">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.7. Kokias priemones ir būdus taikote planuojant ugdymo
                                turinį ir išsiaiškinti mokinių
                                mokymosi
                                poreikius ir
                                pasiekimus. Išvardinkite </label>
                            <div class="space mt-2"></div>
                            <div class=" c ">
                                <textarea class="form-control" type="text" name="tools_and_methods"></textarea>
                                <div class="space mt-2"></div>
                                <p class="text-muted">Išvardinkite svarbiausius: </p>
                                <input class="form-control" type="text" name="first_tool_or_method" placeholder="pirmas">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="second_tool_or_method" placeholder="antras">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="third_tool_or_method" placeholder="trečias">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.8. Ar organizuojama pedagoginė, psichologinė ir kita
                                pagalba mokiniui, ar ji teikiama
                                tinkamai
                                ir ar yra
                                savalaikė. Pateikite pavyzdžių. </label>
                            <div class="space mt-2"></div>
                            <div class="  ">
                                <textarea class="form-control" type="text" name="student_assistance"></textarea>
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.9. Kokius mokymosi būdus bei metodus taikote pamokose,
                                skatinančias mokinius savarankiškai
                                mokytis: </label>
                            <div class="space mt-2"></div>
                            <div class="  ">
                                <input class="form-control" type="text" name="first_method_for_self_directed_learning" placeholder="pirmas">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="second_method_for_self_directed_learning" placeholder="antras">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="third_method_for_self_directed_learning" placeholder="trečias">
                                <div class="space mt-2"></div>
                                <p class="text-muted">Kas pasisekė </p>
                                <input class="form-control" type="text" name="luck">
                                <p class="text-muted">Kokių patyrėte sunkumų </p>
                                <input class="form-control" type="text" name="difficulties">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.10. Kur patalpinate mokymo(si) medžiagą, kurią esate
                                parengęs pamokoms ir/ar
                                diferencijuotam
                                mokymui . </label>
                            <ul class="list-unstyled mb-0 d-flex flex-column">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Moodle aplinkoje </label>
                                            <input class="form-check-input" type="checkbox" value="Moodle aplinkoje"
                                                   name="Moodle" id="Moodle">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">MS Teams aplinkoje </label>
                                            <input class="form-check-input" type="checkbox" value="MS Teams aplinkoje "
                                                   name="Teams" id="Teams">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Google diske</label>
                                            <input class="form-check-input" type="checkbox" value="Google diske "
                                                   name="Google_disk" id="Google">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Eduka aplinkoje </label>
                                            <input class="form-check-input" type="checkbox" value="Eduka aplinkoje "
                                                   name="Eduka" id="Eduka">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Gitlab kodo saugykla </label>
                                            <input class="form-check-input" type="checkbox"
                                                   value="Gitlab kodo saugykla " name="Gitlab" id="Gitlab">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Ftp paslauga </label>
                                            <input class="form-check-input" type="checkbox" value="Ftp paslauga "
                                                   name="Ftp" id="Ftp">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Siunčiu į el.paštą </label>
                                            <input class="form-check-input" type="checkbox" value="Siunčiu į el.paštą "
                                                   name="send_gmail" id="Teams">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="text-left">Dalinuosi facebook grupėje </label>
                                            <input class="form-check-input" type="checkbox"
                                                   value="Dalinuosi facebook grupėje "
                                                   name="Facebook" id="Teams">
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">

                                            <input class="form-control" type="text" name="other_for_learning_material"
                                                   placeholder="Kita(įrašykite)">
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.11. Kokiais jūsų dėstomo dalyko šių mokslo metų mokinių įgytais
                                gebėjimai, rezultatais
                                ugdomosios veiklos
                                darbais, veiklomis džiaugiatės (išvardinkite) </label>
                            <div class="space mt-2"></div>
                            <div class="  ">
                                <input class="form-control" type="text" name="first_happiness_for_good_student" placeholder="pirmas">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="second_happiness_for_good_student" placeholder="antras">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="third_happiness_for_good_student" placeholder="trečias">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.12. Kokiuose dalyvavote konkursuose konkursuose, projektuose,
                                parodose (ne mokykloje)
                                individualiai arba su
                                ugdytiniais (išvardinkite) </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="competitions">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title"> 1.13. BU mokytojams. Kiek mokinių pasirinko Jūsų dalyko
                                valstybinį egzaminą (įrašykite
                                skaičių) </label>
                            <div class="space mt-2"></div>
                            <div class="  ">
                                <input class="form-control" type="number" name="pass_an_exam"
                                       placeholder="Kiek egzaminą išlaikė ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="didnt_pass_an_exam"
                                       placeholder="Kiek egzamino neišlaikė ">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.14. Profesijos mokytojams. Kiek mokinių pasirinko iš Jūsų
                                dalyko atlikti mokyklinį
                                technologijų
                                egzaminą? </label>
                            <div class="space mt-2"></div>
                            <div class="  ">
                                <input class="form-control" type="number">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="pass_an_exam_technology"
                                       placeholder="Kiek egzaminą išlaikė ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="didnt_pass_an_exam_technology"
                                       placeholder="Kiek egzamino neišlaikė ">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.15. Praktikos vadovams. Kokiam mokinių skaičiui vadovauta
                                praktikai</label>
                            <div class="space mt-2"></div>
                            <div class="  ">
                                <input class="form-control" type="number" name="guided_practice"
                                       placeholder="įrašykite">
                                <div class="space mt-2"></div>

                                <label class="col-md-12">Žinios apie mokinių praktikos vietas (pasirinkite) </label>
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="practise_in_companies"
                                       placeholder="Mokinių, atlikusių praktiką įmonėse skaičius ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="practise_apprenticeships"
                                       placeholder="Mokinių, atlikusių praktiką pameistrystės mokymosi forma skaičius  ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="practise_in_school"
                                       placeholder="Mokinių, atlikusių praktiką mokykloje skaičius  ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="practise_with_project_works"
                                       placeholder="Mokinių, praktikos metų atlikusių projektinius darbus skaičius ">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.16. Žinios apie absolventus. Absolventų skaičius Iš
                                jų: </label>
                            <div class="  ">
                                <input class="form-control" type="number"
                                       name="Continue_studying_at_a_college_or_university"
                                       placeholder="Tęsia mokymąsi kolegijoje ar universitete (kiek) ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="Employed"
                                       placeholder="Įsidarbino (kiek) ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="not_working_not_studying"
                                       placeholder="Nedirba, nesimoko (kiek)  ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="Signed_up_for_UT "
                                       placeholder="Užsiregistravo UT (kiek)  ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="Went_abroad"
                                       placeholder="Išvyko į užsienį (kiek) ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="other" placeholder="Kita (nurodykite) ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="number" name="no_data"
                                       placeholder="Nėra duomenų (kiek) ">
                                <div class="space mt-2"></div>
                                <input class="form-control" type="text" name="data_not_provided "
                                       placeholder="Duomenys nepateikti (nurodykite priežastį) ">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.17. Pateikite darbdavių atsiliepimus apie pasitenkinimą
                                absolventų įgytomis
                                kompetencijomis </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="employer_reviews">
                            </div>
                        </div>
                        <div class="space mt-5"></div>
                        <div class="form-group">
                            <label class=" card-title">1.18. Pateikite absolventų atsiliepimus apie jų pasitenkinimą
                                įgyta kvalifikacija 5.2.5 </label>
                            <div class="  ">
                                <input class="form-control" type="text" name="graduate_reviews">
                            </div>
                        </div>
                        {{--<div class="col "> does not work
                         <button href="assessment/page/2" class="btn btn-success me-1 mb-1">Kitas puslapis</button>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>II. Bendravimas, bendradarbiavimas ir veikla institucijos bendruomenėje. </h3>
                </div>
                <div class="card-content">
                    <div class="card-body form-group">
                        <label class="card-title">2.1. Išvardinkite projektus, kuriuose dalyvavote ir savo vaidmenį
                            juose </label>
                        <textarea class="form-control" type="text" name="projects"></textarea>
                        <label>Prie projekto nurodykite projekto pavadinima, jo rengėją, koordinatorių ir vykdytoją</label>

                        {{--<input class="form-control" type="text" name="project_name"
                               placeholder="projekto rengėjas (nurodykite projekto pavadinimą) ">
                        <input class="form-control" type="text" name="project_coordinator"
                               placeholder="projekto koordinatorius (nurodykite projekto pavadinimą) ">
                        <input class="form-control" type="text" name="project_executor"
                               placeholder="projekto vykdytojas (nurodykite projekto pavadinimą)  ">--}}
                        <div class="space mt-5"></div>
                        <label class="card-title">2.2. Pravestų profesinio orientavimo susitikimų skaičius (KITM
                            renginiai, susitikimai BU
                            mokyklose)... </label>
                        <input class="form-control" type="number" name="number_of_career_guidance_meetings">
                        <div class="space mt-5"></div>
                        <label class="card-title">2.3. Pravestų nuotolinių pamokų 7-12 klasių mokiniams
                            skaičius </label>
                        <input class="form-control" type="number"
                               name="number_of_distance_learning_lessons_for_students_in_grades_7-12">
                        <div class="space mt-5"></div>
                        <p class="text-muted">Metodinė veikla mokykloje, pagalba kolegoms. Išvardinkite veiklas</p>
                        <textarea class="form-control" type="text" name="first_activity" placeholder="pirmas"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="second_activity" placeholder="antras"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="third_activity" placeholder="trečias"></textarea>
                        <div class="space mt-5"></div>
                            <label class="card-title">2.5. Grupės vadovo veikla, bendravimas su tėvais, mokinių
                                pasitenkinimas Kas pasisekė: </label>
                        <textarea class="form-control" type="text" name="first_group_leader_activities_luck" placeholder="pirmas"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="second_group_leader_activities_luck" placeholder="antras"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="third_group_leader_activities_luck" placeholder="trečias"></textarea>
                        <div class="space mt-5"></div>
                            <label class="card-title">Kokių turėjote problemų </label>
                        <textarea class="form-control" type="text" name="first_problem" placeholder="pirmas"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="second_problem" placeholder="antras"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="third_problem" placeholder="trečias"></textarea>
                        <div class="space mt-5"></div>
                            <label class="card-title">2.6. Grupės vadovo veikla - mokinių nubyrėjimas </label>
                        <div class="space mt-5"></div>
                        <p class="card-title text-muted">Kiek mokinių įstojo į I kursą: </p>
                        <input class="form-control" type="number" name="students_in_first_year">
                        <div class="space mt-5"></div>
                        <p class="card-title text-muted">Kiek mokinių mokosi šiuo metu (baigė)</p>
                        <input class="form-control" type="number" name="students_studying_or_graduated">
                        <div class="space mt-5"></div>
                        <label class="card-title">2.7. Įvardinkite mokinių „nubyrėjimo“ priežastis ir kaip jas
                            sprendžiate </label>
                        <textarea class="form-control" type="text" name="The_cause_of_the_fall"></textarea>
                        <div class="space mt-5"></div>
                        <label class="card-title">2.8. Kaip informaciją pateikiate ir aptariate ją su mokinių tėvais
                            (globėjais, rūpintojais),
                            kolegomis,
                            kitais
                            suinteresuotais asmenimis? </label>
                        <textarea class="form-control" type="text" name="first_provision_of_information" placeholder="pirmas"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="second_provision_of_information" placeholder="antras"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="third_provision_of_information" placeholder="trečias"></textarea>
                        <div class="space mt-5"></div>
                        <label class="card-title">2.9. Jūsų (kaip grupės vadovo) naudojami mokinių motyvavimo mokytis ir
                            lankyti pamokas būdai ir
                            priemonės </label>
                        <textarea class="form-control" type="text" name="first_student_motivation" placeholder="pirmas"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="second_student_motivation" placeholder="antras"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="third_student_motivation" placeholder="trečias"></textarea>
                        <div class="space mt-5"></div>
                        <label class="card-title">2.10. Dalyvavimas mokyklos socialiniame kultūriniame gyvenime. Jūsų
                            suorganizuoti renginiai
                            mokykloje, kita
                            popamokinė veikla (mokiniams arba mokytojams). </label>
                        <textarea class="form-control" type="text" name="first_events_and_extracurricular_activities" placeholder="pirmas"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="second_events_and_extracurricular_activities" placeholder="antras"></textarea>
                        <div class="space mt-2"></div>
                        <textarea class="form-control" type="text" name="third_events_and_extracurricular_activities" placeholder="trečias"></textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>III veiklos sritis. Asmeninis profesinis tobulėjimas </h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-title text-muted">Kvalifikacijos kėlimas mažiau kaip 5 dienas (30 val.) per
                            mokslo metus </p>
                        <input class="form-control" type="number" name="training" placeholder="valandų skaičius">
                        <p class="text-muted text-decoration-underline">Už kiekvieną dieną (6 valandas) 1 balas </p>
                        <div class="space mt-5"></div>
                        <h4>VEIKLOS ĮSIVERTINIMAS BALŲ: </h4>
                        <p class="card-title text-muted">I SRITIS IŠ VISO<input class="form-control" type="number"
                                                                                name="I_score">
                        <p class="card-title text-muted">Max 54 balai(-ų) </p>
                        <div class="space mt-5"></div>
                        <p class="card-title text-muted">II SRITIS IŠ VISO<input class="form-control" type="number"
                                                                                 name="II_score">
                        <p class="card-title text-muted">Max 30 balai(-ų) </p>
                        <div class="space mt-5"></div>
                        <p class="card-title text-muted">III SRITIS IŠ VISO<input class="form-control" type="number"
                                                                                  name="III_score">
                        <p class="card-title text-muted">Ne mažiau kaip 5 balai(-ų) </p>
                        <div class="space mt-5"></div>
                        <p class="card-title text-muted">Surinktų balų suma: <input class="form-control" type="number"
                                                                                    name="final_score">balai(-ų) </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>IV. BAIGIAMOJI DALIS </h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">
                            <label label class="card-title">4.1. Aprūpinimas materialiaisiais ištekliais </label>
                            <table class="table table-striped">
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
                                    <th>Pedagogo dalyvavimas formuojant ilgalaikius materialiųjų išteklių
                                        modernizavimo tikslus </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="teacher_participation">
                                            <label class="">1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="teacher_participation">
                                            <label class="">2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu" name="teacher_participation">
                                            <label class="">3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="teacher_participation">
                                            <label class="">4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="teacher_participation">
                                            <label class="">5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pagrindinių materialiųjų išteklių nėra ar nepakanka </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="no_insufficient_basic_material_resources">
                                            <label class=""> 1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="no_insufficient_basic_material_resources">
                                            <label class=""> 2</label>
                                        </div>
                                    </td>
                                    <td>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio"
                                               value="Nei nepritariu, nei pritariu"
                                               name="no_insufficient_basic_material_resources">
                                        <label class="">3</label>
                                    </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="no_insufficient_basic_material_resources">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="no_insufficient_basic_material_resources">
                                            <label class=""> 5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Materialiųjų išteklių modernumas ir atitiktis darbo rinkos
                                        poreikiams
                                    </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="modernity_of_material_resources">
                                            <label class=""> 1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="modernity_of_material_resources">
                                            <label class=""> 2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nei nepritariu, nei pritariu"
                                                   name="modernity_of_material_resources">
                                            <label class=""> 3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="modernity_of_material_resources">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai pritariu"
                                                   name="modernity_of_material_resources">
                                            <label class=""> 5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Mokykloje analizuojamas materialiųjų išteklių pakankamumas ir
                                        prieinamumas mokiniams ir
                                        pedagogams
                                    </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="availability_of_material_resources_for_students_and_teachers">
                                            <label class=""> 1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="availability_of_material_resources_for_students_and_teachers">
                                            <label class=""> 2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu"
                                                   name="availability_of_material_resources_for_students_and_teachers">
                                            <label class=""> 3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="availability_of_material_resources_for_students_and_teachers">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="availability_of_material_resources_for_students_and_teachers">
                                            <label class=""> 5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Mokyklos biblioteka aprūpinta moderniais materialiaisiais
                                        ištekliais
                                    </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="school_library_with_modern_material_resources">
                                            <label class=""> 1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="school_library_with_modern_material_resources">
                                            <label class=""> 2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu"
                                                   name="school_library_with_modern_material_resources">
                                            <label class=""> 3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="school_library_with_modern_material_resources">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="school_library_with_modern_material_resources">
                                            <label class=""> 5</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- <ul class="list-unstyled mb-0">
                                 <li class="d-inline-block me-2 mb-1">
                                     <div>
                                             <label class=""> Tikrai nepritariu (1)</label>
                                     </div>
                                 </li>
                                 <li class="d-inline-block me-2 mb-1">
                                     <div>
                                         <label class=""> Nepritariu (2)</label>
                                     </div>
                                 </li>
                                 <li class="d-inline-block me-2 mb-1">
                                     <div>
                                         <label class=""> Nei nepritariu, nei pritariu (3)</label>
                                     </div>
                                 </li>
                                 <li class="d-inline-block me-2 mb-1">
                                     <div>
                                         <label class=""> Pritariu (4)</label>
                                     </div>
                                 </li>
                                 <li class="d-inline-block me-2 mb-1">
                                     <div>
                                         <label class=""> Tikrai pritariu (5)</label>
                                     </div>
                                 </li>
                             </ul> -->
                            <div class="space mt-5"></div>
                            <label class="card-title">Kokius naujos jums svarbius metodinių išteklių įsigijimo atvejus
                                galėtumėte išskirti kaip
                                reikšmingiausius
                                Jūsų
                                institucijoje? </label>
                            <textarea class="form-control" type="text"
                                      name="the_most_significant_resources_in_the_institution"></textarea>

                            <div class="space mt-5"></div>

                            <label class="card-title"> 4.2. Pedagogų pasitenkinimas darbo
                                sąlygomis</label>
                            <table class="table table-striped">
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
                                    <th>Mokyklos mikroklimatas 2.1.3 </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="school_microclimate">
                                            <label class=""> 1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="school_microclimate">
                                            <label class=""> 2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu" name="school_microclimate">
                                            <label class=""> 3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="school_microclimate">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="school_microclimate">
                                            <label class=""> 5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Apmokėjimo už darbą sistemos skaidrumas
                                    </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="transparency_of_the_pay_system">
                                            <label class=""> 1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="transparency_of_the_pay_system">
                                            <label class="">2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu"
                                                   name="transparency_of_the_pay_system">
                                            <label class=""> 3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="transparency_of_the_pay_system">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="transparency_of_the_pay_system">
                                            <label class=""> 5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Materialios darbo sąlygos
                                    </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="material_working_conditions">
                                            <label class="">1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="material_working_conditions">
                                            <label class="">2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu" name="material_working_conditions">
                                            <label class="">3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="material_working_conditions">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="material_working_conditions">
                                            <label class=""> 5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Darbo santykiai
                                    </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="work_relations">
                                            <label class=""> 1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="work_relations">
                                            <label class=""> 2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu" name="work_relations">
                                            <label class=""> 3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="work_relations">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="work_relations">
                                            <label class="">5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Psichologinis klimatas
                                    </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="psychological_climate">
                                            <label class="">1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="psychological_climate">
                                            <label class=""> 2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu" name="psychological_climate">
                                            <label class="">3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="psychological_climate">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="psychological_climate">
                                            <label class=""> 5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Tiesioginio darbo proceso įgyvendinimas
                                    </th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="implementation_of_direct_work_process">
                                            <label class="">1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="implementation_of_direct_work_process">
                                            <label class="">2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu"
                                                   name="implementation_of_direct_work_process">
                                            <label class="">3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="implementation_of_direct_work_process">
                                            <label class="">4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="implementation_of_direct_work_process">
                                            <label class="">5</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Veiksmingi ryšiai su mokiniais, kolegomis, tėvais,
                                        vietos bendruomenės nariais.</th>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Tikrai nepritariu"
                                                   name="effective_communication">
                                            <label class=""> 1</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Nepritariu"
                                                   name="effective_communication">
                                            <label class="">2</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio"
                                                   value="Nei nepritariu, nei pritariu" name="effective_communication">
                                            <label class=""> 3</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" value="Pritariu"
                                                   name="effective_communication">
                                            <label class=""> 4</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ">
                                            <input class="form-check-input " type="radio" value="Tikrai pritariu"
                                                   name="effective_communication">
                                            <label class="">5</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="space mt-5"></div>
                            <div class="form-group"><label class="card-title">4.3. Pedagogo...</label><input
                                    class="form-control" type="text" name="pedagogues"></div>

                            <label class="card-title text-muted">Koks Svarbiausias asmeninis šių metų profesinis
                                pasiekimas (patirtis)? </label>
                            <input class="form-control" type="text" name="the_most_important_achievement">

                            <label class="card-title text-muted">Koks nemaloniausias šių metų įvykis
                                (patirtis)? </label>
                            <input class="form-control" type="text" name="most_unpleasant_event">

                            <label class="card-title text-muted">Kurių funkcijų ar darbų norėtumėte atsisakyti ateityje?
                                Pagrįskite. </label>
                            <input class="form-control" type="text" name="feature_waiver">

                            <label class="card-title text-muted">Kokias kompetencijas Jūs turėtumėte tobulinti
                                ateinančiais metais? Kokia reikalinga pagalba?</label>
                            <input class="form-control" type="text" name="improvements_and_support">

                            <label class="card-title text-muted">Kokis sritys, kuriose labiausiai susiduriu su
                                problemomis </label>
                            <input class="form-control" type="text" name="problematic_areas">

                            <label class="card-title text-muted">Ką tiesioginis vadovas turėtų tobulinti savo
                                sprendimuose ar elgsenoje, kad jūsų veiklos
                                rezultatas būtų
                                geresnis? </label>
                            <input class="form-control" type="text" name="what_should_manager_improve">

                            <p class="card-title text-muted">Kokie institucijos veiksmai užtikrintų vykdomų programų
                                populiarumą? </p>
                            <input class="form-control" type="text" name="popularity_of_programs">

                            <p class="card-title text-muted">Kaip personalas vertina institucijos vadybą ir
                                administravimą (2.1.3.) </p>
                            <input class="form-control" type="text" name="staff_evaluation">

                            <p class="card-title text-muted">Grįžtamasis ryšys iš vadovų. Ar esate patenkintas
                                bendravimu su institucijos administracija
                                (parašykite
                                komentarą) </p>
                            <input class="form-control" type="text" name="happiness_with_communication">

                            <p class="card-title text-muted">Kuo galėtumėte būti naudingas mokyklai (veikla, nesusijusi
                                su pareigybėmis)? </p>
                            <input class="form-control" type="text" name="how_can_I_benefit_the_school">

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>V. KURUOJANČIO VADOVO IŠVADOS, SIŪLYMAI IR NUMATOMA PAGALBA (pildo kuruojantis vadovas) </h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="card-title">5.1.Kuruojančio vadovo stebėtų ir aptartų pamokų (veiklų) skaičius
                                (kokiose grupėse ir kokiam tikslui) </label>
                            <textarea class="form-control" type="text"
                                   name="first_number_of_lessons_discussed_by_the_supervisor" placeholder="pirmas"></textarea>
                            <div class="space mt-2"></div>
                            <textarea class="form-control" type="text"
                                      name="second_number_of_lessons_discussed_by_the_supervisor" placeholder="antras"></textarea>
                            <div class="space mt-2"></div>
                            <textarea class="form-control" type="text"
                                      name="third_number_of_lessons_discussed_by_the_supervisor" placeholder="trečias"></textarea>
                            <div class="space mt-2"></div>

                            <p>5.2. Kuruojančio vadovo komentaras dėl veiklos ir siūlymai dėl veiklos, kvalifikacijos
                                tobulinimo </p>
                            <textarea class="form-control" type="text"
                                   name="managers_comment_on_activities_and_suggestions"></textarea>

                            <p>5.3. Kokią realią pagalbą kuruojantis vadovas numato teikti kitais mokslo metais (šis
                                klausimas aptariamas su
                                mokytoju ar pagalbos mokiniui specialistu)</p>
                            <textarea class="form-control" type="text" name="assistance_in_the_next_school_year"></textarea>

                            <p>5.4. Kokios pagalbos Jums reikėtų, kad galėtumėte tobulinti ugdomąją veiklą, įgyvendinti
                                sumanymus, ugdymo
                                tikslus kitais mokslo metais? </p>
                            <textarea class="form-control" type="text" name="first_help_which_I_need" placeholder="pirmas"></textarea>
                            <div class="space mt-2"></div>
                            <textarea class="form-control" type="text" name="second_help_which_I_need" placeholder="antras"></textarea>
                            <div class="space mt-2"></div>
                            <textarea class="form-control" type="text" name="third_help_which_I_need" placeholder="trečias"></textarea>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <button type="submit" class="btn btn-success me-1 mb-1">Išsaugoti</button>
                </div>

                <div class="col ">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Išsiūsti</button>
                </div>
            </div>
    </form>
</div>
