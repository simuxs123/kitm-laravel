<table>
    <tr>
        <td><b>20{{$info->dateOne}}</b></td>
        <td><b>20{{$info->dateTwo}}</b></td>
        <td><b>MOKSLO METAIS SAVIANALIZĖS ANKETA</b></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>{{$info->name}}</b></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Pareigos:</b></td>{{$info->role}}
    </tr>
    <tr>
        <td>{{$info->role}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kvalifikacinė kategorija:</b></td>
    </tr>
    <tr>
        <td>{{$info->category}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Darbo stažas:</b></td>
    </tr>
    <tr>
        <td style="text-align: left;">{{$info->work_experience}}</td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td style="font-size: 17px;"><b>I sritis. Veiklos planavimas, tiesioginio darbo vykdymas.</b></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td style="font-size: 13px;"><b>1.1 Kokie pagrindiniai iššūkiai organizuojant mokymo procesą(išvardinkite)?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_1_first'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'1_1_second'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'1_1_third'})}}</td>
    </tr> -->
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.2. Aprašykite gerąją mokymo proceso organizavimo patirtį, pasiekimus.</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_2'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.3. Kokie priimti sprendimai, turėjo įtakos mokymo kokybės gerinimui?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_3'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.4. Kokios buvo kilusios problemos ir kokiais sprendimais jas pavyko išspręsti?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_4'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.5. Kokiose bendruomenės narių veiklose dalyvavote sprendžiant iniciatyvumo ir atsakomybės, įstaigos veiklos tobulinimo, planavimo, sprendimų priėmimo ir jų įgyvendinimo pokyčius?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_5'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.6 Parengtų arba atnaujintų veiklos planų, individualių/dalyko, integruoto ugdymo programų/planų skaičius (įrašykite): </b></td>
    </tr>
    <tr>
        <td style="text-align: left;">{{($info->{'1_6'})}}</td>
    </tr>
    <tr>
        <td><b>Išvardinkite svarbiausius planus, kuriuos esate parengęs: </b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_6_first'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'1_6_second'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'1_6_third'})}}</td>
    </tr> -->
    <tr>
        <td><b>Nurodykite, kur patalpinti dalyko/modulio teminiai planai</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_6_link'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.7. Kokias priemones ir būdus taikote planuojant ugdymo turinį ir išsiaiškinti mokinių mokymosi poreikius ir pasiekimus. Išvardinkite </b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_7'})}}</td>
    </tr>
    <tr>
        <td><b>Išvardinkite svarbiausius: </b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_7_first'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'1_7_second'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'1_7_third'})}}</td>
    </tr> -->
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.8. Ar organizuojama pedagoginė, psichologinė ir kita pagalba mokiniui, ar ji teikiama tinkamai ir ar yra savalaikė. Pateikite pavyzdžių. </b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_8'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.9. Kokius mokymosi būdus bei metodus taikote pamokose, skatinančias mokinius savarankiškai mokytis:</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_9_first'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'1_9_second'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'1_9_third'})}}</td>
    </tr> -->
    <tr>
        <td><b>Kas pasisekė</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_9_success'})}}</td>
    </tr>
    <tr>
        <td><b>Kokių patyrėte sunkumų </b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_9_failure'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.10. Kur patalpinate mokymo(si) medžiagą, kurią esate parengęs pamokoms ir/ar diferencijuotam mokymui.</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_10'})}}</td>
    </tr>
    <tr>
        <td>Kita (įrašykite):&nbsp;{{($info->{'1_10_other'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.11. Kokiais jūsų dėstomo dalyko šių mokslo metų mokinių įgytais gebėjimai, rezultatais ugdomosios veiklos darbais, veiklomis džiaugiatės (išvardinkite)</b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_11_first'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'1_11_second'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'1_11_third'})}}</td>
    </tr> -->
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.12. Kokiuose dalyvavote konkursuose konkursuose, projektuose, parodose (ne mokykloje) individualiai arba su ugdytiniais (išvardinkite) </b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_12'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.13. BU mokytojams. Kiek mokinių pasirinko Jūsų dalyko valstybinį egzaminą (įrašykite skaičių) </b></td>
    </tr>
    <tr>
        <td>Išlaikė:&nbsp;{{($info->{'1_13_islaike'})}}</td>
    </tr>
    <tr>
        <td>Neišlaikė:&nbsp;{{($info->{'1_13_neislaike'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.14. Profesijos mokytojams. Kiek mokinių pasirinko iš Jūsų dalyko atlikti mokyklinį technologijų egzaminą? </b></td>
    </tr>
    <tr>
        <td>Skaičius:&nbsp;{{($info->{'1_14_nr'})}}</td>
    </tr>
    <tr>
        <td>Išlaikė:&nbsp;{{($info->{'1_14_islaike'})}}</td>
    </tr>
    <tr>
        <td>Neišlaikė:&nbsp;{{($info->{'1_14_neislaike'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.15. Praktikos vadovams. Kokiam mokinių skaičiui vadovauta praktikai</b></td>
    </tr>
    <tr>
        <td style="text-align: left;">{{($info->{'1_15_nr'})}}</td>
    </tr>
    <tr>
        <td><b>Žinios apie mokinių praktikos vietas (pasirinkite) </b></td>
    </tr>
    <tr>
        <td>Mokinių, atlikusių praktiką įmonėse skaičius:&nbsp;{{($info->{'1_15_1'})}}</td>
    </tr>
    <tr>
        <td>Mokinių, atlikusių praktiką pameistrystės mokymosi forma skaičius:&nbsp;{{($info->{'1_15_2'})}}</td>
    </tr>
    <tr>
        <td>Mokinių, atlikusių praktiką mokykloje skaičius:&nbsp;{{($info->{'1_15_3'})}}</td>
    </tr>
    <tr>
        <td>Mokinių, praktikos metų atlikusių projektinius darbus skaičius:&nbsp;{{($info->{'1_15_4'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.16. Žinios apie absolventus. Absolventų skaičius Iš jų:</b></td>
    </tr>
    <tr>
        <td>Tęsia mokymąsi kolegijoje ar universitete (kiek):&nbsp;{{($info->{'1_16_1'})}}</td>
    </tr>
    <tr>
        <td>Įsidarbino (kiek):&nbsp;{{($info->{'1_16_2'})}}</td>
    </tr>
    <tr>
        <td>Nedirba, nesimoko (kiek):&nbsp;{{($info->{'1_16_3'})}}</td>
    </tr>
    <tr>
        <td>Užsiregistravo UT (kiek):&nbsp;{{($info->{'1_16_4'})}}</td>
    </tr>
    <tr>
        <td>Išvyko į užsienį (kiek):&nbsp;{{($info->{'1_16_5'})}}</td>
    </tr>
    <tr>
        <td>Kita (nurodykite):&nbsp;{{($info->{'1_16_6'})}}</td>
    </tr>
    <tr>
        <td>Nėra duomenų (kiek):&nbsp;{{($info->{'1_16_7'})}}</td>
    </tr>
    <tr>
        <td>Duomenys nepateikti (nurodykite priežastį)</td>
    </tr>
    <tr>
        <td>{{($info->{'1_16_8'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.17. Pateikite darbdavių atsiliepimus apie pasitenkinimą absolventų įgytomis kompetencijomis.</b></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td>{{($info->{'1_17'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>1.18. Pateikite absolventų atsiliepimus apie jų pasitenkinimą įgyta kvalifikacija 5.2.5 </b></td>
    </tr>
    <tr>
        <td>{{($info->{'1_18'})}}</td>
    </tr>

    <!-- --------------------------------------------- 2 SRITIS --------------------------------------- -->

    <tr>
        <td></td>
    </tr>
    <tr>
        <td style="font-size: 17px;"><b>II sritis. Bendravimas, bendradarbiavimas ir veikla institucijos bendruomenėje.</b></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td style="font-size: 13px;"><b>2.1. Išvardinkite projektus, kuriuose dalyvavote ir savo vaidmenį juose.</b></td>
    </tr>
    <tr><td></td></tr>
    @foreach($projects[0] as $project)
    <tr>
        <td>Projektas:&nbsp;{{$project['prname']}}</td>
    </tr>
    <tr>
        <td>Rengėjas:&nbsp;{{$project['prdev']}}</td>
    </tr>
    <tr>
        <td>Koordinatorius:&nbsp;{{$project['prcoo']}}</td>
    </tr>
    <tr>
        <td>Vykdytojas:&nbsp;{{$project['prexe']}}</td>
    </tr>
    <tr><td></td></tr>
    @endforeach
    <tr>
        <td style="font-size: 13px;"><b>2.2. Pravestų profesinio orientavimo susitikimų skaičius (KITM renginiai, susitikimai BU mokyklose)</b></td>
    </tr>
    <tr>
        <td style="text-align: left;">{{($info->{'2_2'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>2.3. Pravestų nuotolinių pamokų 7-12 klasių mokiniams skaičius</b></td>
    </tr>
    <tr>
        <td style="text-align: left;">{{($info->{'2_3'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>2.4 Metodinė veikla mokykloje, pagalba kolegoms. Išvardinkite veiklas</b></td>
    </tr>
    <tr>
        <td>{{($info->{'2_4_1'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'2_4_2'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'2_4_3'})}}</td>
    </tr> -->
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>2.5. Grupės vadovo veikla, bendravimas su tėvais, mokinių pasitenkinimas Kas pasisekė: </b></td>
    </tr>
    <tr>
        <td>{{($info->{'2_5_1'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'2_5_2'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'2_5_3'})}}</td>
    </tr> -->
    <tr><td></td></tr>
    <tr>
        <td><b>Kokių turėjote problemų?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'2_5_4'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'2_5_5'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'2_5_6'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>2.6. Grupės vadovo veikla - mokinių nubyrėjimas</b></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kiek mokinių įstojo į I kursą:</b></td>
    </tr>
    <tr>
        <td style="text-align: left;">{{($info->{'2_6_1'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kiek mokinių mokosi šiuo metu (baigė)</b></td>
    </tr>
    <tr>
        <td style="text-align: left;">{{($info->{'2_6_2'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>2.7. Įvardinkite mokinių „nubyrėjimo“ priežastis ir kaip jas sprendžiate </b></td>
    </tr>
    <tr>
        <td>{{($info->{'2_7'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>2.8. Kaip informaciją pateikiate ir aptariate ją su mokinių tėvais (globėjais, rūpintojais), kolegomis, kitais suinteresuotais asmenimis? </b></td>
    </tr>
    <tr>
        <td>{{($info->{'2_8_1'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'2_8_2'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'2_8_3'})}}</td>
    </tr> -->
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>2.9. Jūsų (kaip grupės vadovo) naudojami mokinių motyvavimo mokytis ir lankyti pamokas būdai ir priemonės </b></td>
    </tr>
    <tr>
        <td>{{($info->{'2_9_1'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'2_9_2'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'2_9_3'})}}</td>
    </tr> -->
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>2.10. Dalyvavimas mokyklos socialiniame kultūriniame gyvenime. Jūsų suorganizuoti renginiai mokykloje, kita popamokinė veikla (mokiniams arba mokytojams). </b></td>
    </tr>
    <tr>
        <td>{{($info->{'2_10_1'})}}</td>
    </tr>
    <!-- <tr>
        <td>{{($info->{'2_10_2'})}}</td>
    </tr>
    <tr>
        <td>{{($info->{'2_10_3'})}}</td>
    </tr> -->

    <!-- -------------------------------------------------------------3 SRITIS--------------------------------------------------------------------------- -->

    <tr>
        <td></td>
    </tr>
    <tr>
        <td style="font-size: 17px;"><b>III sritis. Bendravimas, bendradarbiavimas ir veikla institucijos bendruomenėje.</b></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td style="font-size: 13px;"><b>Kvalifikacijos kėlimas mažiau kaip 5 dienas (30 val.) per mokslo metus</b></td>
    </tr>
    <tr>
        <td><i>Už kiekvieną dieną (6 valandas) 1 balas</i></td>
    </tr>
    <tr>
        <td>Balai:&nbsp;{{($info->{'3_hours'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td>I sritis:&nbsp;{{($info->{'3_I'})}}</td>
    </tr>
    <tr>
        <td>II sritis:&nbsp;{{($info->{'3_II'})}}</td>
    </tr>
    <tr>
        <td>III sritis:&nbsp;{{($info->{'3_III'})}}</td>
    </tr> 
    <tr>
        <td>Surinktų balų suma:&nbsp;{{($info->{'3_sum'})}}</td>
    </tr>

<!-- -----------------------------------------------------------4 SRITIS------------------------------------ -->

    <tr>
        <td></td>
    </tr>
    <tr>
        <td style="font-size: 17px;"><b>IV sritis. Baigiamoji dalis.</b></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td style="font-size: 13px;"><b>4.1. Aprūpinimas materialiaisiais ištekliais </b></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Pedagogo dalyvavimas formuojant ilgalaikius materialiųjų išteklių modernizavimo tikslus</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_1_1'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_1_1'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_1_1'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_1_1'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_1_1'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Pagrindinių materialiųjų išteklių nėra ar nepakanka</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_1_2'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_1_2'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_1_2'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_1_2'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_1_2'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Materialiųjų išteklių modernumas ir atitiktis darbo rinkos poreikiams</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_1_3'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_1_3'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_1_3'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_1_3'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_1_3'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Mokykloje analizuojamas materialiųjų išteklių pakankamumas ir prieinamumas mokiniams ir pedagogams</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_1_4'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_1_4'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_1_4'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_1_4'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_1_4'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Mokyklos biblioteka aprūpinta moderniais materialiaisiais ištekliais</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_1_5'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_1_5'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_1_5'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_1_5'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_1_5'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kokius naujos jums svarbius metodinių išteklių įsigijimo atvejus galėtumėte išskirti kaip reikšmingiausius Jūsų institucijoje?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_1_6'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>4.2. Pedagogų pasitenkinimas darbo sąlygomis</b></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Mokyklos mikroklimatas</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_2_1'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_2_1'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_2_1'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_2_1'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_2_1'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Apmokėjimo už darbą sistemos skaidrumas</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_2_2'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_2_2'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_2_2'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_2_2'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_2_2'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Materialios darbo sąlygos</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_2_3'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_2_3'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_2_3'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_2_3'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_2_3'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Darbo santykiai</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_2_4'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_2_4'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_2_4'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_2_4'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_2_4'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Psichologinis klimatas</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_2_5'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_2_5'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_2_5'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_2_5'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_2_5'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Tiesioginio darbo proceso įgyvendinimas</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_2_6'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_2_6'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_2_6'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_2_6'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_2_6'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Veiksmingi ryšiai su mokiniais, kolegomis, tėvais, vietos bendruomenės nariais</b></td>
    </tr>
    <tr>
        <td>
            {{ ($info->{'4_2_7'} =="1") ? 'Tikrai nepritariu' : ''}}
            {{ ($info->{'4_2_7'} =="2") ? 'Nepritariu' : '' }}
            {{ ($info->{'4_2_7'} =="3") ? 'Nei nepritariu, nei pritariu' : ''}}
            {{ ($info->{'4_2_7'} =="4") ? 'Pritariu' : '' }}
            {{ ($info->{'4_2_7'} =="5") ? 'Tikrai pritariu' : '' }}
        </td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td style="font-size: 13px;"><b>4.3. Pedagogo</b></td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td>{{($info->{'4_3_1'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Koks Svarbiausias asmeninis šių metų profesinis pasiekimas (patirtis)?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_2'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Koks nemaloniausias šių metų įvykis (patirtis)?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_3'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kurių funkcijų ar darbų norėtumėte atsisakyti ateityje? Pagrįskite.</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_4'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kokias kompetencijas Jūs turėtumėte tobulinti ateinančiais metais? Kokia reikalinga pagalba? </b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_5'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kokis sritys, kuriose labiausiai susiduriu su problemomis</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_6'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Ką tiesioginis vadovas turėtų tobulinti savo sprendimuose ar elgsenoje, kad jūsų veiklos rezultatas būtų geresnis?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_7'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kokie institucijos veiksmai užtikrintų vykdomų programų populiarumą?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_8'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kaip personalas vertina institucijos vadybą ir administravimą?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_9'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Grįžtamasis ryšys iš vadovų. Ar esate patenkintas bendravimu su institucijos administracija (parašykite komentarą)</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_10'})}}</td>
    </tr>
    <tr><td></td></tr>
    <tr>
        <td><b>Kuo galėtumėte būti naudingas mokyklai (veikla, nesusijusi su pareigybėmis)?</b></td>
    </tr>
    <tr>
        <td>{{($info->{'4_3_11'})}}</td>
    </tr>
    <tr><td></td></tr>
</table>