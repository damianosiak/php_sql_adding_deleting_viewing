<!doctype html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <div id="dodawaniediv" style="width:400px;height:100px;outline-style:solid;background-color:lightgrey;float:left">
        <form action="dodawanie.php" method="POST">
            <label for="wimie">Imię ucznia: </label><input type="text" id="wimie" name="wimie" required style="width:200px;position:absolute;left:150px;"><br/>
            <label for="wnazwisko">Nazwisko ucznia: </label><input type="text" id="wnazwisko" name="wnazwisko" required style="width:200px;position:absolute;left:150px;"><br/>
            <label for="wklasa">Wybierz klasę: </label>
            <select id="wklasa" name="wklasa" required style="width:200px;position:absolute;left:150px;">
                <option value="1">1A</option>
                <option value="2">1B</option>
                <option value="3">2A</option>
                <option value="4">2B</option>
                <option value="5">3A</option>
                <option value="6">3B</option>
            </select><br/>
            <input type="submit" value="Dodaj ucznia">
        </form>
    </div>
    <div id="wyswietlanieiv" style="width:400px;height:50px;outline-style:solid;background-color:lightgrey;float:left;">
        <form action="wyswietlanie.php" method="POST">
            <label for="dklasa">Klasa: </label>
            <select id="dklasa" name="dklasa" required style="width:200px;position:absolute;left:550px;">
                <option value="1">1A</option>
                <option value="2">1B</option>
                <option value="3">2A</option>
                <option value="4">2B</option>
                <option value="5">3A</option>
                <option value="6">3B</option>
            </select><br/>
            <input type="submit" value="Wyświetl klasę">
        </form>
    </div>
    <div id="usuwanieiv" style="width:200px;height:50px;outline-style:solid;background-color:lightgrey;float:left;">
        <form action="usuwanie.php" method="POST">
            <label for="iducznia">ID ucznia: </label><input type="number" id="iducznia" name="iducznia" required style="width:100px;position:absolute;left:900px;"><br/>
            <input type="submit" value="Usuń ucznia">
        </form>
    </div>
    
    
    <div id="usuwanieiv2" style="width:300px;height:75px;outline-style:solid;background-color:lightgrey;float:left;">
        <form action="usuwanie2.php" method="POST">
            <label for="uimie2">Imie ucznia: </label><input type="text" id="uimie2" name="uimie2" required style="width:150px;position:absolute;left:1150px;"><br/>
            <label for="unazwisko2">Nazwisko ucznia: </label><input type="text" id="unazwisko2" name="unazwisko2" required style="width:150px;position:absolute;left:1150px;"><br/>
            <label for="usklasa">Klasa: </label>
            <select id="usklasa" name="usklasa" required style="width:150px;position:absolute;left:1150px;">
                <option value="1">1A</option>
                <option value="2">1B</option>
                <option value="3">2A</option>
                <option value="4">2B</option>
                <option value="5">3A</option>
                <option value="6">3B</option>
            </select><br/>
            <input type="submit" value="Usuń ucznia">
        </form>
    </div>
</body>