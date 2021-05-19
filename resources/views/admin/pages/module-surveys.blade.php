@extends('admin.main')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="box">
        @foreach($modules as $module)
            <div class="card" style="width: 13rem; height: 18rem">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <p class="card-title d-flex justify-content-center align-items-center" style="width: 100px; height: 100px; font-size: 100px; border: 2px solid #e0fffd; border-radius: 10px; background-color: #e0fffd">{{$module->module_name[0]}}</p>
                    <h5 class="card-title">{{$module->module_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_name}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_surname}}</h6>
                    <h6 class="card-subtitle">{{$module->group_name}}</h6>
                    <a href="/moduleFill/{{$module->id}}" class="card-link btn btn-primary me-1 mb-1">Užpildyti</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
