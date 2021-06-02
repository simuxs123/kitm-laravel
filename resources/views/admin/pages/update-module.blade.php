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
    @include('admin/_partials/sidebar')
    <div class="card">
        <div class="card-body">
            <form method="post" action="/update/{{$module->id}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="page-heading">
                    <h4>Redaguoti modulį</h4>
                </div>
                <div class="form row">
                    <label for="surname">Mokytojo Vardas Pavardė</label>
                    <select name="surname">
                        @foreach($teachers as $teacher)
                        <option class="form-control" name="surname" value="{{$teacher->id}}">{{$teacher->name . " " . $teacher->surname}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="groupName">Grupės pavadinimas</label>
                    <input type="text" class="form-control" name="groupName" value="{{$module->group_name}}">
                </div>
                <div class="form-group">
                    <label for="moduleName">Modulio pavadinimas</label>
                    <input type="text" class="form-control" name="moduleName" value="{{$module->module_name}}">
                </div>
                <div class="form-group">
                    <label for="updatecheck">Taip pat atnaujinti apklausų informaciją</label>
                    <input type="checkbox" name="updatecheck" value="checked">
                </div>
                <button type="submit" class="btn btn-primary">Patvirtinti</button>
            </form>
        </div>
    </div>
</div>