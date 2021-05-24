@extends('admin.main')
<div id="main">
<h3>Kvalifikacijos kelimas</h3>

<form method="post" action="">
<label for="name">Vardas</label>
<input type="text" value="{{$name}}" name="name" disabled>
<label for="surname">Pavarde</label>
<input type="text" value="{{$surname}}" name="surname" disabled>
<label for="duty">Pareigos</label>
<input type="text" name="duty">
<label for="category">Kvalifikacine kategorija</label>
<input type="text" name="category">
<label for="seminar">Seminaro pavadinimas</label>
<input type="text" name="seminar">
<label for="date">Data</label>
<input type="date" name="date">
<label for="hours">Valandu skaicius</label>
<input type="number" name="hours">
<label for="certificate"></label>
<input type="text" name="certificate">
<label for="location"></label>
<input type="text" name="location">

<button type="submit">Pridėti</button>
</form>
</div>