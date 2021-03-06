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
<div class="card">
<form method="post" action="/storeGuide/{{$survey}}">
    {{csrf_field()}}
    <div class="card-header">
        <h3>V. KURUOJANČIO VADOVO IŠVADOS, SIŪLYMAI IR NUMATOMA PAGALBA (pildo kuruojantis vadovas) </h3>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="form-group">
                <label for="5.1vadovas">5.1. Kuruojančio vadovo stebėtų ir aptartų pamokų (veiklų) skaičius
                    (kokiose grupėse ir kokiam tikslui) </label>
                <textarea class="form-control" id="5.1vadovas"name="first_number_of_lessons_discussed_by_the_supervisor" rows="4" cols="50"></textarea>

                    <label for="5.2vadovas">5.2. Kuruojančio vadovo komentaras dėl veiklos ir siūlymai dėl veiklos, kvalifikacijos
                    tobulinimo </label>
                    <textarea class="form-control" id="5.2vadovas"name="managers_comment_on_activities_and_suggestions" rows="4" cols="50"></textarea>
              
                <label>5.3. Kokią realią pagalbą kuruojantis vadovas numato teikti kitais mokslo metais (šis
                    klausimas aptariamas su
                    mokytoju ar pagalbos mokiniui specialistu)</label>
                <input class="form-control" id=""type="text" name="assistance_in_the_next_school_year">
                
                <label class="mt-2"for="5.4vadovas">5.4. Kokios pagalbos Jums reikėtų, kad galėtumėte tobulinti ugdomąją veiklą, įgyvendinti
                    sumanymus, ugdymo
                    tikslus kitais mokslo metais? </label>
                    <textarea class="form-control" id="5.4vadovas"name="first_help_which_I_need" rows="4" cols="50"></textarea>
                <!--<input class="form-control mt-2" type="text" name="first_help_which_I_need">
                <input class="form-control mt-2" type="text" name="second_help_which_I_need">
                <input class="form-control mt-2" type="text" name="third_help_which_I_need">-->
                <label>5.5. Vadovo vertinimas(10 balų sistemoje)</label>
                <input class="form-control" type="number" name="guide_evaluation" min="0" max="10">
            </div>
        </div>
    </div>
</div>
        <button type="submit" class="btn btn-primary me-1 mb-1">Pateikti</button>
</form>
</div>