@extends('admin.main')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('admin/_partials/sidebar')
<form method="post" action="/update/{{$module->id}}" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
    <label for="moduleName">Modulio pav</label>
    <input type="text" name="moduleName" value="{{$module->module_name}}">
    <label for="name">Mokytojo vardas</label>
    <input type="text" name="name" value="{{$module->teacher_name}}">
    <label for="surname">Mokytojo pavarde</label>
    <input type="text" name="surname" value="{{$module->teacher_surname}}">
    <label for="groupName">Grupes pav</label>
    <input type="text" name="groupName" value="{{$module->group_name}}">
    <button type="submit">submit</button>
</form>
