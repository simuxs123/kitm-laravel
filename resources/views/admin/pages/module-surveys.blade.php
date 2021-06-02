@extends('admin.main')
<div id="main">
    @include('admin/_partials/sidebar')
    <div class="box">
        {{-- be ju neveikia akordeonai--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach($modules as $module)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{$module->id}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$module->id}}" aria-expanded="false" aria-controls="flush-collapse{{$module->id}}">
                            {{$module->module_name}} / {{$module->teacher_surname}} / {{$module->group_name}}
                        </button>
                    </h2>
                    <div id="flush-collapse{{$module->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$module->id}}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><a href="/survey/{{$module->id}}" class="card-link">Užpildyti</a></div>

                    </div>
                </div>
{{--            <div class="card" style="width: 13rem; height: 13rem">--}}
{{--                <div class="card-body d-flex flex-column align-items-center justify-content-center">--}}
{{--                    <h5 class="card-title">{{$module->module_name}}</h5>--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_name}}</h6>--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_surname}}</h6>--}}
{{--                    <h6 class="card-subtitle">{{$module->group_name}}</h6>--}}
{{--                    <a href="/survey/{{$module->id}}" class="card-link">Užpildyti</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        @endforeach
            {{-- be ju neveikia akordeonai--}}
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        </div>
    </div>
</div>
