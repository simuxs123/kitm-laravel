<form method="post" action="/storeAssessment">
    {{csrf_field()}}
    <h5>KAUNO INFORMACINIŲ TECHNOLOGIJŲ MOKYKLOS
        MOKYTOJO IR PAGALBOS MOKINIUI SPECIALISTO VEIKLOS IR KVALIFIKACIJOS TOBULINIMO
        20-<input type="text" name="dateOne">- 20-<input type="text" name="dateTwo"> MOKSLO METAIS SAVIANALIZĖS ANKETA
    </h5>
    <input type="text" name="name" placeholder="Vardas">
    <input type="text" name="surname" placeholder="Pavarde">
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
    <input type="text" name="work_experience" placeholder="Darbo stažas">
    <p>Kiekvienas kriterijus verinamas 0-1-2-3 balais</p>
    <b>I sritis. Veiklos planavimas, tiesioginio darbo vykdymas</b>
    <p>1.1Kokie pagrindiniai iššūkiai organizuojant mokymo procesą(išvardinkite)?</p>
    <input type="text" name="firstChallenge" placeholder="pirmas iššukis">
    <input type="text" name="secondChallenge" placeholder="antras iššukis">
    <input type="text" name="thirdChallenge" placeholder="trecias iššukis">
    <p>1.2. Aprašykite gerąją mokymo proceso organizavimo patirtį, pasiekimus. </p>
    <input type="text" name="training_organization_experience_achievements">
    <p>1.3. Kokie priimti sprendimai, turėjo įtakos mokymo kokybės gerinimui? </p>
    <input type="text" name="quality_of_teaching">
    <p>1.4. Kokios buvo kilusios problemos ir kokias sprendimais jas pavyko išspręsti? </p>
    <input type="text" name="problems_and_solutions">
    <p>1.5. Kokiose bendruomenės narių veiklose dalyvavote sprendžiant iniciatyvumo ir atsakomybės, įstaigos veiklos
        tobulinimo, planavimo, sprendimų priėmimo ir jų įgyvendinimo pokyčius</p>
    <textarea type="text" name="participated_acts"></textarea>
    <p>1.2.2.</p>
    <p>1.6 Parengtų arba atnaujintų veiklos planų, individualių/dalyko, integruoto ugdymo programų/planų skaičius
        (įrašykite) </p>
    <input type="number" name="number_of_plans">
    <p>Išvardinkite svarbiausius planus, kuriuos esate parengęs: </p>
    <input type="text" name="firstPlan" placeholder="pirmas planas">
    <input type="text" name="secondPlan" placeholder="antras planas">
    <input type="text" name="thirdPlan" placeholder="trecias planas">
    <p>Nurodykite, kur patalpinti dalyko/modulio teminiai planai </p>
    <input type="text" name="link_to_plans">
    <p>1.7. Kokias priemones ir būdus taikote planuojant ugdymo turinį ir išsiaiškinti mokinių mokymosi poreikius ir
        pasiekimus. Išvardinkite </p>
    <textarea type="text" name="tools_and_methods"></textarea>
    <p>Išvardinkite svarbiausius: </p>
    <input type="text" name="first_tool_or_method">
    <input type="text" name="second_tool_or_method">
    <input type="text" name="third_tool_or_method">
    <p>1.8. Ar organizuojama pedagoginė, psichologinė ir kita pagalba mokiniui, ar ji teikiama tinkamai ir ar yra
        savalaikė. Pateikite pavyzdžių. </p>
    <textarea type="text" name="student_assistance"></textarea>
    <p>1.9. Kokius mokymosi būdus bei metodus taikote pamokose, skatinančias mokinius savarankiškai mokytis: </p>
    <input type="text" name="first_method_for_self_directed_learning">
    <input type="text" name="second_method_for_self_directed_learning">
    <input type="text" name="third_method_for_self_directed_learning">
    <p>Kas pasisekė </p>
    <input type="text" name="luck">
    <p>Kokių patyrėte sunkumų </p>
    <input type="text" name="difficulties">
    <p>1.10. Kur patalpinate mokymo(si) medžiagą, kurią esate parengęs pamokoms ir/ar diferencijuotam mokymui . </p>
    <span>Moodle aplinkoje </span>
    <input type="checkbox" value="Moodle aplinkoje" name="Moodle">
    <span>MS Teams aplinkoje </span>
    <input type="checkbox" value="MS Teams aplinkoje " name="Teams">
    <span>Google diske </span>
    <input type="checkbox" value="Google diske " name="Google_disk">
    <span>Eduka aplinkoje </span>
    <input type="checkbox" value="Eduka aplinkoje " name="Eduka">
    <span>Gitlab kodo saugykla </span>
    <input type="checkbox" value="Gitlab kodo saugykla " name="Gitlab">
    <span>Ftp paslauga </span>
    <input type="checkbox" value="Ftp paslauga " name="Ftp">
    <span>Siunčiu į el.paštą </span>
    <input type="checkbox" value="Siunčiu į el.paštą " name="send_gmail">
    <span>Dalinuosi facebook grupėje </span>
    <input type="checkbox" value="Dalinuosi facebook grupėje " name="Facebook">
    <input type="text" name="other_for_learning_material" placeholder="Kita(įrašykite)">
    <p>1.11. Kokiais jūsų dėstomo dalyko šių mokslo metų mokinių įgytais gebėjimai, rezultatais ugdomosios veiklos
        darbais, veiklomis džiaugiatės (išvardinkite) </p>
    <input type="text" name="first_happiness_for_good_student">
    <input type="text" name="second_happiness_for_good_student">
    <input type="text" name="third_happiness_for_good_student">
    <p>1.12. Kokiuose dalyvavote konkursuose konkursuose, projektuose, parodose (ne mokykloje) individualiai arba su
        ugdytiniais (išvardinkite) </p>
    <input type="text" name="competitions">
    <p> 1.13. BU mokytojams. Kiek mokinių pasirinko Jūsų dalyko valstybinį egzaminą (įrašykite skaičių) </p>
    <input type="number" name="pass_an_exam" placeholder="Kiek egzaminą išlaikė ">
    <input type="number" name="didnt_pass_an_exam" placeholder="Kiek egzamino neišlaikė ">
    <p>1.14. Profesijos mokytojams. Kiek mokinių pasirinko iš Jūsų dalyko atlikti mokyklinį technologijų egzaminą? </p>
    <input type="number">
    <input type="number" name="pass_an_exam_technology" placeholder="Kiek egzaminą išlaikė ">
    <input type="number" name="didnt_pass_an_exam_technology" placeholder="Kiek egzamino neišlaikė ">
    <p>1.15. Praktikos vadovams. Kokiam mokinių skaičiui vadovauta praktikai</p>
    <input type="number" name="guided_practice" placeholder="įrašykite">
    <p>Žinios apie mokinių praktikos vietas (pasirinkite) </p>
    <input type="number" name="practise_in_companies" placeholder="Mokinių, atlikusių praktiką įmonėse skaičius ">
    <input type="number" name="practise_apprenticeships"
           placeholder="Mokinių, atlikusių praktiką pameistrystės mokymosi forma skaičius  ">
    <input type="number" name="practise_in_school" placeholder="Mokinių, atlikusių praktiką mokykloje skaičius  ">
    <input type="number" name="practise_with_project_works"
           placeholder="Mokinių, praktikos metų atlikusių projektinius darbus skaičius ">
    <p>1.16. Žinios apie absolventus. Absolventų skaičius Iš jų: </p>
    <input type="number" name="Continue_studying_at_a_college_or_university"
           placeholder="Tęsia mokymąsi kolegijoje ar universitete (kiek) ">
    <input type="number" name="Employed" placeholder="Įsidarbino (kiek) ">
    <input type="number" name="not_working_not_studying" placeholder="Nedirba, nesimoko (kiek)  ">
    <input type="number" name="Signed_up_for_UT " placeholder="Užsiregistravo UT (kiek)  ">
    <input type="number" name="Went_abroad" placeholder="Išvyko į užsienį (kiek) ">
    <input type="text" name="other" placeholder="Kita (nurodykite) ">
    <input type="number" name="no_data" placeholder="Nėra duomenų (kiek) ">
    <input type="text" name="data_not_provided " placeholder="Duomenys nepateikti (nurodykite priežastį) ">
    <p>1.17. Pateikite darbdavių atsiliepimus apie pasitenkinimą absolventų įgytomis kompetencijomis </p>
    <input type="text" name="employer_reviews">
    <p>1.18. Pateikite absolventų atsiliepimus apie jų pasitenkinimą įgyta kvalifikacija 5.2.5 </p>
    <input type="text" name="graduate_reviews">
    <b>II. Bendravimas, bendradarbiavimas ir veikla institucijos bendruomenėje. </b>
    <p>Išvardinkite projektus, kuriuose dalyvavote ir savo vaidmenį juose </p>
    <input type="text" name="projects">
    <input type="text" name="project_name" placeholder="projekto rengėjas (nurodykite projekto pavadinimą) ">
    <input type="text" name="project_coordinator"
           placeholder="projekto koordinatorius (nurodykite projekto pavadinimą) ">
    <input type="text" name="project_executor" placeholder="projekto vykdytojas (nurodykite projekto pavadinimą)  ">
    <p>2.2. Pravestų profesinio orientavimo susitikimų skaičius (KITM renginiai, susitikimai BU mokyklose)... </p>
    <input type="number" name="number_of_career_guidance_meetings">
    <p>2.3. Pravestų nuotolinių pamokų 7-12 klasių mokiniams skaičius </p>
    <input type="number" name="number_of_distance_learning_lessons_for_students_in_grades_7-12">
    <p>Metodinė veikla mokykloje, pagalba kolegoms. Išvardinkite veiklas</p>
    <input type="text" name="first_activity">
    <input type="text" name="second_activity">
    <input type="text" name="third_activity">
    <p>2.5. Grupės vadovo veikla, bendravimas su tėvais, mokinių pasitenkinimas Kas pasisekė: </p>
    <input type="text" name="first_group_leader_activities_luck">
    <input type="text" name="second_group_leader_activities_luck">
    <input type="text" name="third_group_leader_activities_luck">
    <p>Kokių turėjote problemų </p>
    <input type="text" name="first_problem">
    <input type="text" name="second_problem">
    <input type="text" name="third_problem">
    <p>2.6. Grupės vadovo veikla - mokinių nubyrėjimas </p>
    <p>Kiek mokinių įstojo į I kursą: </p>
    <input type="number" name="students_in_first_year">
    <p>Kiek mokinių mokosi šiuo metu (baigė)</p>
    <input type="number" name="students_studying_or_graduated">
    <p>2.7. Įvardinkite mokinių „nubyrėjimo“ priežastis ir kaip jas sprendžiate </p>
    <textarea type="text" name="The_cause_of_the_fall"></textarea>
    <p>2.8. Kaip informaciją pateikiate ir aptariate ją su mokinių tėvais (globėjais, rūpintojais), kolegomis, kitais
        suinteresuotais asmenimis? </p>
    <input type="text" name="first_provision_of_information">
    <input type="text" name="second_provision_of_information">
    <input type="text" name="third_provision_of_information">
    <p>2.9. Jūsų (kaip grupės vadovo) naudojami mokinių motyvavimo mokytis ir lankyti pamokas būdai ir priemonės </p>
    <input type="text" name="first_student_motivation">
    <input type="text" name="second_student_motivation">
    <input type="text" name="third_student_motivation">
    <p>2.10. Dalyvavimas mokyklos socialiniame kultūriniame gyvenime. Jūsų suorganizuoti renginiai mokykloje, kita
        popamokinė veikla (mokiniams arba mokytojams). </p>
    <input type="text" name="first_events_and_extracurricular_activities">
    <input type="text" name="second_events_and_extracurricular_activities">
    <input type="text" name="third_events_and_extracurricular_activities">
    <b>III veiklos sritis. Asmeninis profesinis tobulėjimas </b>
    <p>Kvalifikacijos kėlimas mažiau kaip 5 dienas (30 val.) per mokslo metus </p>
    <input type="number" name="training" placeholder="valandų skaičius">
    <p>Už kiekvieną dieną (6 valandas) 1 balas </p>
    <h3>VEIKLOS ĮSIVERTINIMAS BALŲ: </h3>
    <p>I SRITIS IŠ VISO<input type="number" name="I_score">
    <p>Max 54 balai(-ų) </p>
    <p>II SRITIS IŠ VISO<input type="number" name="II_score">
    <p>Max 30 balai(-ų) </p>
    <p>III SRITIS IŠ VISO<input type="number" name="III_score">
    <p>Ne mažiau kaip 5 balai(-ų) </p>
    <p>Surinktų balų suma: <input type="number" name="final_score">balai(-ų) </p>
    <b>IV. BAIGIAMOJI DALIS </b>
    <p>4.1. Aprūpinimas materialiaisiais ištekliais </p>
    <p>
        Tikrai nepritariu (1)
        Nepritariu (2)
        Nei nepritariu, nei pritariu (3)
        Pritariu (4)
        Tikrai pritariu (5)
    </p>
    <p>Pedagogo dalyvavimas formuojant ilgalaikius materialiųjų išteklių modernizavimo tikslus </p>
    <input type="radio" value="Tikrai nepritariu" name="teacher_participation">
    <input type="radio" value="Nepritariu" name="teacher_participation">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="teacher_participation">
    <input type="radio" value="Pritariu" name="teacher_participation">
    <input type="radio" value="Tikrai pritariu" name="teacher_participation">
    <p>Pagrindinių materialiųjų išteklių nėra ar nepakanka </p>
    <input type="radio" value="Tikrai nepritariu" name="no_insufficient_basic_material_resources">
    <input type="radio" value="Nepritariu" name="no_insufficient_basic_material_resources">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="no_insufficient_basic_material_resources">
    <input type="radio" value="Pritariu" name="no_insufficient_basic_material_resourcesv">
    <input type="radio" value="Tikrai pritariu" name="no_insufficient_basic_material_resources">
    <p>Materialiųjų išteklių modernumas ir atitiktis darbo rinkos poreikiams </p>
    <input type="radio" value="Tikrai nepritariu" name="modernity_of_material_resources">
    <input type="radio" value="Nepritariu" name="modernity_of_material_resources">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="modernity_of_material_resources">
    <input type="radio" value="Pritariu" name="modernity_of_material_resources">
    <input type="radio" value="Tikrai pritariu" name="modernity_of_material_resources">
    <p>Mokykloje analizuojamas materialiųjų išteklių pakankamumas ir prieinamumas mokiniams ir pedagogams </p>
    <input type="radio" value="Tikrai nepritariu" name="availability_of_material_resources_for_students_and_teachers">
    <input type="radio" value="Nepritariu" name="availability_of_material_resources_for_students_and_teachers">
    <input type="radio" value="Nei nepritariu, nei pritariu"
           name="availability_of_material_resources_for_students_and_teachers">
    <input type="radio" value="Pritariu" name="availability_of_material_resources_for_students_and_teachers">
    <input type="radio" value="Tikrai pritariu" name="availability_of_material_resources_for_students_and_teachers">
    <p>Mokyklos biblioteka aprūpinta moderniais materialiaisiais ištekliais </p>
    <input type="radio" value="Tikrai nepritariu" name="school_library_with_modern_material_resources">
    <input type="radio" value="Nepritariu" name="school_library_with_modern_material_resources">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="school_library_with_modern_material_resources">
    <input type="radio" value="Pritariu" name="school_library_with_modern_material_resources">
    <input type="radio" value="Tikrai pritariu" name="school_library_with_modern_material_resources">
    <p>Kokius naujos jums svarbius metodinių išteklių įsigijimo atvejus galėtumėte išskirti kaip reikšmingiausius Jūsų
        institucijoje? </p>
    <textarea type="text" name="the_most_significant_resources_in_the_institution"></textarea>
    <p>4.2. Pedagogų pasitenkinimas darbo sąlygomis </p>
    <p>Mokyklos mikroklimatas 2.1.3 </p>
    <input type="radio" value="Tikrai nepritariu" name="school_microclimate">
    <input type="radio" value="Nepritariu" name="school_microclimate">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="school_microclimate">
    <input type="radio" value="Pritariu" name="school_microclimate">
    <input type="radio" value="Tikrai pritariu" name="school_microclimate">
    <p>Apmokėjimo už darbą sistemos skaidrumas </p>
    <input type="radio" value="Tikrai nepritariu" name="transparency_of_the_pay_system">
    <input type="radio" value="Nepritariu" name="transparency_of_the_pay_system">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="transparency_of_the_pay_system">
    <input type="radio" value="Pritariu" name="transparency_of_the_pay_system">
    <input type="radio" value="Tikrai pritariu" name="transparency_of_the_pay_system">
    <p>Materialios darbo sąlygos</p>
    <input type="radio" value="Tikrai nepritariu" name="material_working_conditions">
    <input type="radio" value="Nepritariu" name="material_working_conditions">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="material_working_conditions">
    <input type="radio" value="Pritariu" name="material_working_conditions">
    <input type="radio" value="Tikrai pritariu" name="material_working_conditions">
    <p>Darbo santykiai </p>
    <input type="radio" value="Tikrai nepritariu" name="work_relations">
    <input type="radio" value="Nepritariu" name="work_relations">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="work_relations">
    <input type="radio" value="Pritariu" name="work_relations">
    <input type="radio" value="Tikrai pritariu" name="work_relations">
    <p>Psichologinis klimatas </p>
    <input type="radio" value="Tikrai nepritariu" name="psychological_climate">
    <input type="radio" value="Nepritariu" name="psychological_climate">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="psychological_climate">
    <input type="radio" value="Pritariu" name="psychological_climate">
    <input type="radio" value="Tikrai pritariu" name="psychological_climate">
    <p>Tiesioginio darbo proceso įgyvendinimas </p>
    <input type="radio" value="Tikrai nepritariu" name="implementation_of_direct_work_process">
    <input type="radio" value="Nepritariu" name="implementation_of_direct_work_process">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="implementation_of_direct_work_process">
    <input type="radio" value="Pritariu" name="implementation_of_direct_work_process">
    <input type="radio" value="Tikrai pritariu" name="implementation_of_direct_work_process">
    <p>Veiksmingi ryšiai su mokiniais, kolegomis, tėvais, vietos bendruomenės nariais. </p>
    <input type="radio" value="Tikrai nepritariu" name="effective_communication">
    <input type="radio" value="Nepritariu" name="effective_communication">
    <input type="radio" value="Nei nepritariu, nei pritariu" name="effective_communication">
    <input type="radio" value="Pritariu" name="effective_communication">
    <input type="radio" value="Tikrai pritariu" name="effective_communication">
    <p>4.3. Pedagogo<input type="text" name="pedagogues"></p>
    <p>Koks Svarbiausias  asmeninis šių metų profesinis pasiekimas (patirtis)? </p>
    <input type="text" name="the_most_important_achievement">
    <p>Koks nemaloniausias šių metų įvykis (patirtis)? </p>
    <input type="text" name="most_unpleasant_event">
    <p>Kurių funkcijų ar darbų norėtumėte atsisakyti ateityje?  Pagrįskite.   </p>
    <input type="text" name="feature_waiver">
    <p>Kokias kompetencijas Jūs turėtumėte tobulinti ateinančiais metais?  Kokia reikalinga pagalba? </p>
    <input type="text" name="improvements_and_support">
    <p>Kokis sritys, kuriose labiausiai susiduriu su problemomis   </p>
    <input type="text" name="problematic_areas">
    <p>Ką tiesioginis vadovas turėtų tobulinti savo sprendimuose ar elgsenoje, kad jūsų veiklos rezultatas būtų geresnis?  </p>
    <input type="text" name="what_should_manager_improve">
    <p>Kokie  institucijos veiksmai užtikrintų vykdomų programų populiarumą? </p>
    <input type="text" name="popularity_of_programs">
    <p>Kaip personalas vertina institucijos vadybą ir administravimą (2.1.3.) </p>
    <input type="text" name="staff_evaluation">
    <p>Grįžtamasis ryšys iš vadovų. Ar esate patenkintas bendravimu su institucijos administracija (parašykite komentarą) </p>
    <input type="text" name="happiness_with_communication">
    <p>Kuo galėtumėte būti naudingas mokyklai (veikla, nesusijusi su pareigybėmis)? </p>
    <input type="text" name="how_can_I_benefit_the_school">
    <h3>V. KURUOJANČIO VADOVO IŠVADOS, SIŪLYMAI IR NUMATOMA PAGALBA (pildo kuruojantis vadovas) </h3>
    <p>5.1.Kuruojančio vadovo stebėtų ir aptartų pamokų (veiklų) skaičius (kokiose grupėse ir kokiam tikslui)   </p>
    <input type="text" name="first_number_of_lessons_discussed_by_the_supervisor">
    <input type="text" name="second_number_of_lessons_discussed_by_the_supervisor">
    <input type="text" name="third_number_of_lessons_discussed_by_the_supervisor">
    <p>5.2. Kuruojančio vadovo komentaras dėl veiklos ir siūlymai dėl veiklos, kvalifikacijos tobulinimo   </p>
    <input type="text" name="managers_comment_on_activities_and_suggestions">
    <p>5.3. Kokią realią pagalbą kuruojantis vadovas numato teikti kitais mokslo metais (šis klausimas aptariamas su mokytoju ar pagalbos mokiniui specialistu)</p>
    <input type="text" name="assistance_in_the_next_school_year">
    <p>5.4. Kokios pagalbos Jums reikėtų, kad galėtumėte tobulinti ugdomąją veiklą, įgyvendinti sumanymus, ugdymo tikslus kitais mokslo metais? </p>
    <input type="text" name="first_help_which_I_need">
    <input type="text" name="second_help_which_I_need">
    <input type="text" name="third__help_which_I_need">






</form>
