@extends('admin.main')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    @include('admin/_partials/sidebar')
    <div class="box">
        @foreach($modules as $module)
            <div class="card" style="width: 13rem; height: 13rem">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h5 class="card-title">{{$module->module_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_name}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_surname}}</h6>
                    <h6 class="card-subtitle">{{$module->group_name}}</h6>
                    <a href="/moduleFill/{{$module->id}}" class="card-link">Uzpildyti</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
