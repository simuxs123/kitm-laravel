@extends('admin.main')
<div id="main">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Vardas, pavardė</th>
        <th scope="col">Kvalifikacinė kategorija</th>
        <th scope="col">Vidurkis</th>
      </tr>
    </thead>
    <tbody>
      @foreach($reports as $report)
      <tr>
        <td>{{$report[0].' '.$report[1]}}</td>
        @if($report[3] == false)
        <td style="color: red;">Trūksta duomenų</td>
        @else
        <td>{{$report[2]}}</td>
        @endif
        @if($report[3] == false or $report[4] == false or $report[7] == false)
        <td style="color: red;">Trūksta duomenų</td>
        @else
        <td style="color: green;"><b>{{$report[5]}}</b></td>
        @endif
        <td><a href="/reportView/{{$report[6]}}"><button type="button" class="btn btn-primary">Plačiau</button></a></td>
      </tr>
      @endforeach
  </table>
</div>