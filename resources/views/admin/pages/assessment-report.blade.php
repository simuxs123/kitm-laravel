@extends('admin.main')
<div id="main">
<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">Vardas</th>
        <th scope="col">Pavarde</th>
        <th scope="col">Kvalifikacine kategorija</th>
        <th scope="col">Vidurkis</th>
    </tr>
  </thead>
  <tbody>
  @foreach($reports as $report)
    <tr>
        <td>{{$report[0]}}</td>
        <td>{{$report[1]}}</td>
        <td style="color: red;">{{($report[3] == false) ? 'Trūksta duomenų' : $report[2]}}</td>
        <td style="color: red;">{{($report[3] == false or $report[4] == false or $report[7] == false) ? 'Trūksta duomenų' : $report[5]}}</td>
        @if($report[3] == false or $report[4] == false or $report[7] == false)
        <td><a href="/reportView/{{$report[6]}}"><button type="button" class="btn btn-danger">Plačiau</button></a></td>
        @endif
    </tr>
    @endforeach
</table>
</div>