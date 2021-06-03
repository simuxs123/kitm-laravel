<form method="post" action="/storeGuide">
    {{csrf_field()}}
    {{method_field('PATCH')}}
<div class="card">
    <div class="card-header">
        <h3>V. KURUOJANČIO VADOVO IŠVADOS, SIŪLYMAI IR NUMATOMA PAGALBA (pildo kuruojantis vadovas) </h3>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="form-group">
                <label class="card-title">5.1.Kuruojančio vadovo stebėtų ir aptartų pamokų (veiklų) skaičius
                    (kokiose grupėse ir kokiam tikslui) </label>
                <input class="form-control" type="text"
                       name="first_number_of_lessons_discussed_by_the_supervisor">
                <input class="form-control" type="text"
                       name="second_number_of_lessons_discussed_by_the_supervisor">
                <input class="form-control" type="text"
                       name="third_number_of_lessons_discussed_by_the_supervisor">
                <p>5.2. Kuruojančio vadovo komentaras dėl veiklos ir siūlymai dėl veiklos, kvalifikacijos
                    tobulinimo </p>
                <input class="form-control" type="text"
                       name="managers_comment_on_activities_and_suggestions">
                <p>5.3. Kokią realią pagalbą kuruojantis vadovas numato teikti kitais mokslo metais (šis
                    klausimas aptariamas su
                    mokytoju ar pagalbos mokiniui specialistu)</p>
                <input class="form-control" type="text" name="assistance_in_the_next_school_year">
                <p>5.4. Kokios pagalbos Jums reikėtų, kad galėtumėte tobulinti ugdomąją veiklą, įgyvendinti
                    sumanymus, ugdymo
                    tikslus kitais mokslo metais? </p>
                <input class="form-control" type="text" name="first_help_which_I_need">
                <input class="form-control" type="text" name="second_help_which_I_need">
                <input class="form-control" type="text" name="third_help_which_I_need">
                <p>5.5. Vadovo vertinimas(10 balu sistemoje)</p>
                <input class="form-control" type="number" name="guide_evaluation">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col ">
        <button type="submit" class="btn btn-primary me-1 mb-1">Pateikti</button>
    </div>
</div>
</form>
