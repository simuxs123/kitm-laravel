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
    @if(Session::has('danger'))
    <div class="alert alert-danger">
        {{Session::get('danger')}}
    </div>
    @endif
    <h2 class="text-center">Įsivertinimo anketos aktyvacija</h2>
    <div class="card p-4">
    <form class="text-center" enctype='multipart/form-data' method="post" action="/activate-form">
        {{csrf_field()}}
        <input type="date" id="date" class="form-control-sm" name="data">
        <input type="time" id="time" class="form-control-sm" name="laikas">
        <input type="submit" class="btn btn-primary" value="Aktyvuoti" :disabled='true'>
    </form>
    <div class="row text-center mt-2">
        @if($activated)
        <p class="col-6">Anketa aktyvuota iki {{$data->end_date}}</p>
        @else
        <p class="col-6">Anketa neaktyvuota</p>
        @endif
        <div class="col-6 float-left">
        <a href="/delete-activate" class="btn btn-danger">Atšaukti aktyvaciją</a>
    </div>
    </div>
    </div>
    <h2 class="text-center">Modulių aktyvacija</h2>
    <div class="card p-4">
    <form class="text-center" enctype='multipart/form-data' method="post" action="/activateModule">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <select name="module" class="form-control-sm">
            @foreach($modules as $module)
            <option name="module" value="{{$module->id}}">{{$module->module_name}}</option>
            @endforeach
        </select>
        <input type="date" class="form-control-sm" id="date" name="date">
        <input type="time" class="form-control-sm" id="time" name="time">
        <input type="submit" class="btn btn-primary" value="Aktyvuoti">
    </form>
    <table>
        <tr class="text-center">
            <th>Aktyvuoti moduliai</th>
            <th>Aktyvuota iki</th>
        </tr>
        @foreach($activeModules as $item)
        <tr class="text-center">
            <td>{{$item->module_name}}</td>
            <td>{{$item->date}}</td>
            <td>
                <form method="post" action="/cancelActivation/{{$item->id}}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                    <input type="submit" class="btn btn-danger" value="Atšaukti aktyvaciją"></input>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
