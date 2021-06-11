<style>
    .modalC {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 2em;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgb(0, 0, 0, 0.4);
    }

    .modalContent {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border-top: 5px groove black;
        border-left: 5px groove black;
        border-bottom: 5px ridge black;
        border-right: 5px ridge black;
        width: 45%;
    }

    .closeModal {
        color: #aaaaaa;
        margin-left: 97%;
        font-size: 28px;
        font-weight: bold;
    }

    .closeModal:hover,
    .closeModal:focus {
        color: red;
        text-decoration: none;
        cursor: pointer;
    }

    .qmark:hover {
        pointer-events: none;
    }

    .qmark {
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
    }

    .modB {
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
    }
</style>

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

    <div class="modalC" onclick="closeMod2(event)">
        <div class="modalContent">
            <span class="closeModal" onclick="closeMod1()">X</span>
            <p>Prašome įvesti reikalingus duomenis (einant iš kairės į dešinę):</p>
            <ul>
                <li>Šiuo metu einamos pareigos</li>
                <li>Mokytojo turima kvalifikacinė kategorija (Pvz. Vyr. Mokytojas)</li>
                <li>Mokymų pavadinimas, kuriame dalyvavote</li>
                <li>Mokymų data</li>
                <li>Mokymų valandų skaičius</li>
                <li>Išrašyto mokymų pažymėjimo numeris</li>
                <li>Mokymus organizavusios įstaigos pavadinimas</li>
            </ul>
            <p>Įsitikinę, jog suvesti duomenys yra teisingi, paspauskite mygtuką „Pridėti“.</p>
            <p>Nepageidaujamas kvalifikacijas galite pašalinti skiltyje "Mano kvalifikacijos"</p>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <span class="btn btn-danger mb-5 mt-4 qmark"><b>?</b></span><span id="modalB" class="btn btn-outline-danger mb-5 mt-4 modB">Anketos pildymo informacija</span>
    </div>

    @roles('admin,mokytojas')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kvalifikacijos kėlimas</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="/saveQuali">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Vardas, pavardė</label>
                                            <input type="text" id="name" class="form-control" value="{{$name.' '.$surname}}" name="name" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="duty">Pareigos</label>
                                            <input type="text" id="duty" class="form-control" name="duty" maxlength="255" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="category">Kvalifikacinė kategorija</label>
                                            <input type="text" id="category" class="form-control" name="category" maxlength="255" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="seminar">Seminaro Pavadinimas</label>
                                            <input type="text" id="seminar" class="form-control" name="seminar" maxlength="255" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="date">Data</label>
                                            <input type="date" id="date" class="form-control" name="date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="hours">Valandų skaičius</label>
                                            <input type="number" id="hours" class="form-control" name="hours" step="0.1" min="0" max="99" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="certificate">Pažymėjimo numeris</label>
                                            <input type="text" id="certificate" class="form-control" name="certificate" maxlength="255" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="location">Kur kelta kvalifikacija</label>
                                            <input type="text" id="location" class="form-control" name="location" maxlength="255" required>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Pridėti</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Mano kvalifikacijos</h3>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Vardas, pavardė</th>
                                        <th>Pareigos</th>
                                        <th>Kvalifikacinė kategorija</th>
                                        <th>Seminaro pavadinimas</th>
                                        <th>Data</th>
                                        <th>Valandų skaičius</th>
                                        <th>Pažymėjimo numeris</th>
                                        <th>Kur kelta kvalifikacija</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($list as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->duty}}</td>
                                        <td>{{$item->category}}</td>
                                        <td>{{$item->seminar}}</td>
                                        <td>{{$item->date}}</td>
                                        <td>{{$item->hours}}</td>
                                        <td>{{$item->certificate}}</td>
                                        <td>{{$item->location}}</td>
                                        <td><a href="/removeQuali/{{$item->id}}"><button type="button" class="btn btn-danger">Šalinti</button></a></td>
                                    </tr>
                                    @endforeach
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endroles
    @roles('admin,darbuotojas')
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Mokytojų kvalifikacijos ataskaita</h3>
                    </div>
                    <div class="card-content">
                        <!-table striped -->
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Vardas, pavardė</th>
                                            <th>Visas valandų kiekis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($results as $result)
                                        <tr>
                                            <td>{{$result[0].' '.$result[1]}}</td>
                                            <td>{{$result[2] ?? "0"}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endroles
</div>
<script>
    let modal = document.querySelector(".modalC");
    let btn = document.querySelector("#modalB");
    let modalClose = document.querySelector(".modalClose");
    let modalContent = document.querySelector('.modalContent');

    btn.onclick = function() {
        modal.style.display = "block";
    }

    function closeMod1() {
        modal.style.display = "none";
    }

    function closeMod2(event) {
        let clickCheck = modalContent.contains(event.target);

        if (!clickCheck) {
            modal.style.display = 'none';
        }
    }
</script>