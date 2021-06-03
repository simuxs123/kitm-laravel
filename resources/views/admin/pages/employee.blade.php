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
    <h2>Įsivertinimo anketos aktyvacija</h2>
    <form class="text-center" enctype='multipart/form-data' method="post" action="/activate-form">
        {{csrf_field()}}
        <input type="date" id="date" name="data">
        <input type="time" id="time" name="laikas">
        <input type="submit" class="btn btn-primary" value="Atnaujinti" :disabled='true'>
    </form>
    <div class="text-center">
        <label>Ištrinti kai aktyvuota, bandymams</label>
        <a href="/delete-activate" class="btn btn-danger">Ištrinti</a>
    </div>
    @if($activated)
    <p class="text-center">Anketa aktyvuota iki {{$data->end_date}}</p>
    @else
    <p class="text-center">Anketa neaktyvuota</p>
    @endif
    
    <h2>Modulių aktyvacija</h2>
    <form class="text-center" enctype='multipart/form-data' method="post" action="/activateModule">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <select name="module">
            @foreach($modules as $module)
            <option name="module" value="{{$module->id}}">{{$module->module_name}}</option>
            @endforeach
        </select>
        <input type="date" id="date" name="date">
        <input type="time" id="time" name="time">
        <input type="submit" class="btn btn-primary" value="Aktyvuoti">
    </form>
    <table>
        <tr>
            <th>Aktyvuoti moduliai</th>
            <th>Aktyvuota iki</th>
        </tr>
        @foreach($activeModules as $item)
        <tr>
            <td>{{$item->module_name}}</td>
            <td>{{$item->date}}</td>
            <td>
                <form method="post" action="/cancelActivation/{{$item->id}}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                    <input type="submit" value="Atšaukti aktyvaciją"></input>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>