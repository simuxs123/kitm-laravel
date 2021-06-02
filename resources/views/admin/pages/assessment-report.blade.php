@extends('admin.main')
<div id="main">
<table>
<tr>
<th>Vardas</th>
<th>Pavarde</th>
<th>Kvalifikacine kategorija</th>
<th>Vidurkis</th>
</tr>
@foreach($reports as $report)
<tr>
<td style="border: solid black 1px; padding: 0.5em;">{{$report[0]}}</td>
<td style="border: solid black 1px; padding: 0.5em;">{{$report[1]}}</td>
<td style="border: solid black 1px; padding: 0.5em;">{{($report[3] == false or $report[4] == false) ? 'Trūksta duomenų' : $report[2]}}</td>
<td style="border: solid black 1px; padding: 0.5em;">{{($report[3] == false or $report[4] == false) ? 'Trūksta duomenų' : $report[5]}}</td>
@if($report[3] == false or $report[4] == false)
<td><a href="/reportView/{{$report[6]}}">Plačiau</a></td>
@endif
</tr>
@endforeach
</table>
</div>