@extends('admin.main')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="page-content">
    <div class="page-heading">
        <h3>Modulių valdymas</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <form method="post" action="/createModule">
                    {{csrf_field()}}
                    <div class="page-heading">
                        <h4>Pridėti modulį</h4>
                    </div>
                    <div class="form row">
                        <div class="form-group col-md-6">
                            <label for="name">Mokytojo Vardas</label>
                            <input type="text" class="form-control" placeholder="Vardas" name="name" maxlength="15">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="surname">Mokytojo Pavardė</label>
                            <input type="text" class="form-control" placeholder="Pavardė" name="surname" maxlength="15">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="groupName">Grupės pavadinimas</label>
                        <input type="text" class="form-control" placeholder="ZP20/1" name="groupName">
                    </div>
                    <div class="form-group">
                        <label for="moduleName">Modulio pavadinimas</label>
                        <input type="text" class="form-control" placeholder="Programavimo pagrindai" name="moduleName" maxlength="7">
                    </div>
                    <button type="submit" class="btn btn-primary">Pateikti</button>
                </form>
            </blockquote>
        </div>
    </div>
    <div class="page-heading">
        <h3>Moduliai</h3>
    </div>
    <div class="box row">
        @foreach($modules as $module)
            <div class="card m-3 text-center" style="width: 16rem; height:13rem">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h2>{{$module->group_name}}</h2>
                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_name}} {{$module->teacher_surname}}</h6>
                    <h6 class="card-subtitle">{{$module->module_name}}</h6>
                    <div class="row">
                        <a href="/updateModule/{{$module->id}}" class="btn btn-primary mt-2 btn-sm">REDAGUOTI</a>
                        <a href="/deleteModule/{{$module->id}}" class="btn btn-danger mt-1 btn-sm">PASALINTI</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</div>

