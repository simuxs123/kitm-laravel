@extends('login.main')
@include('admin/_partials/login-head')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    @include('admin/_partials/sidebar')
    <div class="page-heading">
        <h3>Statistika</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Peržiūros šiandien</h6>
                                        <h6 class="font-extrabold mb-0">{{$prisijungimai}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Mokytojai</h6>
                                        <h6 class="font-extrabold mb-0">{{$mokytojai}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Mokiniai</h6>
                                        <h6 class="font-extrabold mb-0">{{$mokiniai}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Moduliu atsakymai</h6>
                                        <h6 class="font-extrabold mb-0">{{$apklausos}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Apsilankymai</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4>TOP mokytojai</h4>
                            </div>
                            <div class="card-body">
                                <ol>
                                    @foreach($result as $item)
                                    <li>
                                        <h5>{{$item[0].' '.$item[1].' - '.$item[2]}}</h5>
                                    </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar">
                                <img src="assets/images/faces/4.png" alt="Face 1">
                            </div>
                            <div class="ms-3 name ">
                                <h5 class="font-bold">{{$userName}}</h5>
                                <h6>{{$userRole}}</h6>
                                <a class="btn btn-success" href="/sign-out">Atsijungti</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Naujausi Vartotojai</h4>
                    </div>
                    <div class="card-content pb-4">
                        @foreach($naujausi as $vartotojas)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="assets/images/faces/4.png">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">{{$vartotojas->name.' '.$vartotojas->surname}}</h5>
                                <h6 class="text-muted mb-0">{{$vartotojas->email}}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin/_partials/footer')

    <script>
        var sausis = '{{$menesiai[0]}}';
        var vasaris = '{{$menesiai[1]}}';
        var kovas = '{{$menesiai[2]}}';
        var balandis = '{{$menesiai[3]}}';
        var geguze = '{{$menesiai[4]}}';
        var birzelis = '{{$menesiai[5]}}';
        var liepa = '{{$menesiai[6]}}';
        var rugpjutis = '{{$menesiai[7]}}';
        var rugsejis = '{{$menesiai[8]}}';
        var spalis = '{{$menesiai[9]}}';
        var lapkritis = '{{$menesiai[10]}}';
        var gruodis = '{{$menesiai[11]}}';

        var optionsProfileVisit = {
            annotations: {
                position: 'back'
            },
            dataLabels: {
                enabled: false
            },
            chart: {
                type: 'bar',
                height: 300
            },
            fill: {
                opacity: 1
            },
            plotOptions: {},
            series: [{
                name: 'Apsilankymai',
                data: [sausis,
                    vasaris,
                    kovas,
                    balandis,
                    geguze,
                    birzelis,
                    liepa,
                    rugpjutis,
                    rugsejis,
                    spalis,
                    lapkritis,
                    gruodis,
                ]
            }],
            colors: '#435ebe',
            xaxis: {
                categories: ["Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis", "Liepa", "Rugpjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis"],
            },
        }
        var chartProfileVisit = new ApexCharts(document.querySelector("#chart-profile-visit"), optionsProfileVisit);
    </script>