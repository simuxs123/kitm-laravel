@extends('admin.main')
<div id="main">
    <h3>Kvalifikacijos kelimas</h3>

    <form method="post" action="/saveQuali">
        {{csrf_field()}}
        <label for="name">Vardas</label>
        <input type="text" value="{{$name}}" name="name" readonly="readonly">
        <label for="surname">Pavarde</label>
        <input type="text" value="{{$surname}}" name="surname" readonly="readonly">
        <label for="duty">Pareigos</label>
        <input type="text" name="duty" required>
        <label for="category">Kvalifikacine kategorija</label>
        <input type="text" name="category" required>
        <label for="seminar">Seminaro pavadinimas</label>
        <input type="text" name="seminar" required>
        <label for="date">Data</label>
        <input type="date" name="date" required>
        <label for="hours">Valandu skaičius</label>
        <input type="number" name="hours" step="0.1" required>
        <label for="certificate">Pažymėjimo numeris</label>
        <input type="text" name="certificate" required>
        <label for="location">Kur kelta kvalifikacija</label>
        <input type="text" name="location" required>

        <button type="submit">Pridėti</button>
    </form>

    <h3>Mano kvalifikacijos</h3>
    <table>
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Pareigos</th>
            <th>Kvalifikacine kategorija</th>
            <th>Seminaro pavadinimas</th>
            <th>Data</th>
            <th>Valandu skaičius</th>
            <th>Pažymėjimo numeris</th>
            <th>Kur kelta kvalifikacija</th>
        </tr>
        @foreach($list as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->surname}}</td>
            <td>{{$item->duty}}</td>
            <td>{{$item->category}}</td>
            <td>{{$item->seminar}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->hours}}</td>
            <td>{{$item->certificate}}</td>
            <td>{{$item->location}}</td>
        </tr>
        @endforeach
    </table>

    <h3>Mokytoju kvalifikacijos ataskaita</h3>

    <table>
    <tr>
    <th>Vardas</th>
    <th>Pavarde</th>
    <th>Visas valandu kiekis</th>
    </tr>
    @foreach($results as $result)
    <tr>
    <td>{{$result[0] ?? "noname"}}</td>
    <td>{{$result[1] ?? "noname"}}</td>
    <td>{{$result[2] ?? "0"}}</td>
    </tr>
    @endforeach
    </table>
</div>