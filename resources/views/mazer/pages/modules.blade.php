<form method="post" action="/createModule">
{{csrf_field()}}
    <label for="moduleName">Modulio pav</label>
    <input type="text" name="moduleName">
    <label for="name">Mokytojo vardas</label>
    <input type="text" name="name">
    <label for="surname">Mokytojo pavarde</label>
    <input type="text" name="surname">
    <label for="groupName">Grupes pav</label>
    <input type="text" name="groupName">
    <button type="submit">submit</button>
</form>
<table>
<tr>
<th>modulio pav</th>
<th>mokytojo vardas</th>
<th>mokytojo pavarde</th>
<th>grupes pav</th>
</tr>
@foreach($modules as $module)
    <tr>
    <td>{{$module->module_name}}</td>
    <td>{{$module->teacher_name}}</td>
    <td>{{$module->teacher_surname}}</td>
    <td>{{$module->group_name}}</td>
    </tr>
@endforeach
</table>