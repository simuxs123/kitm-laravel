@extends('admin.main')
<div id="main">

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
                                            <label for="name">Vardas</label>
                                            <input type="text" id="name" class="form-control"
                                                   value="{{$name}}" name="name" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="surname">Pavardė</label>
                                            <input type="text" id="surname" class="form-control"
                                                   value="{{$surname}}" name="surname" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="duty">Pareigos</label>
                                            <input type="text" id="duty" class="form-control"
                                                   name="duty" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="category">Kvalifikacinė kategorija</label>
                                            <input type="text" id="category" class="form-control"
                                                   name="category" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="seminar">Seminaro Pavadinimas</label>
                                            <input type="text" id="seminar" class="form-control"
                                                   name="seminar" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="date">Data</label>
                                            <input type="date" id="date" class="form-control"
                                                   name="date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="hours">Valandų skaičius</label>
                                            <input type="number" id="hours" class="form-control"
                                                   name="hours" step="0.1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="certificate">Pažymėjimo numeris</label>
                                            <input type="text" id="certificate" class="form-control"
                                                   name="certificate" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="location">Kur kelta kvalifikacija</label>
                                            <input type="text" id="location" class="form-control"
                                                   name="location" required>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Pridėti</button>
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
                                    <th>Vardas</th>
                                    <th>Pavardė</th>
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
                                        <td>{{$item->surname}}</td>
                                        <td>{{$item->duty}}</td>
                                        <td>{{$item->category}}</td>
                                        <td>{{$item->seminar}}</td>
                                        <td>{{$item->date}}</td>
                                        <td>{{$item->hours}}</td>
                                        <td>{{$item->certificate}}</td>
                                        <td>{{$item->location}}</td>
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

    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Mokytojų kvalifikacijos ataskaita</h3>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>Vardas</th>
                                    <th>Pavardė</th>
                                    <th>Visas valandų kiekis</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($results as $result)
                                    <tr>
                                        <td>{{$result[0] ?? "noname"}}</td>
                                        <td>{{$result[1] ?? "noname"}}</td>
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
</div>
