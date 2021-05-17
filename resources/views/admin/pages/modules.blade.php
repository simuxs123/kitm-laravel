@extends('admin.main')
<div id="main">
    @include('admin/_partials/sidebar')
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
                <input type="text" class="form-control" placeholder="Vardas" required>
            </div>
        <div class="form-group col-md-6">
            <label for="surname">Mokytojo Pavardė</label>
            <input type="text" class="form-control" placeholder="Pavardė" required>
        </div>
    </div>
  <div class="form-group">
    <label for="groupName">Grupės pavadinimas</label>
    <input type="text" class="form-control" placeholder="Grupės pavadinimas" required>
  </div>
  <div class="form-group">
    <label for="moduleName">Modulio pavadinimas</label>
    <input type="text" class="form-control" placeholder="Modulio pavadinimas"required>
  </div>
  <button type="submit" class="btn btn-primary">Pateikti</button>
</form>
    </blockquote>
  </div>
</div>
    <div class="box">
        @foreach($modules as $module)
            <div class="card" style="width: 13rem; height: 13rem">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <h5 class="card-title">{{$module->module_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_name}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{$module->teacher_surname}}</h6>
                    <h6 class="card-subtitle">{{$module->group_name}}</h6>
                    <a href="/updateModule/{{$module->id}}" class="card-link">Edit</a>
                    <a href="/deleteModule/{{$module->id}}" class="card-link">Remove</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
</main>
