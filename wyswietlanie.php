<?php

    $klasa=$_POST['dklasa'];

    //BAZA
    $host="localhost";
    $login="root";
    $haslo="";
    $db="szkola";
    $laczenie=mysqli_connect($host,$login,$haslo,$db) or die("Blad z polaczeniem");
    //

    $zapytanie="SELECT uczniowie.ID_ucznia,uczniowie.Imie,uczniowie.Nazwisko,klasy.Nazwa_klasy,klasy.Wychowawca FROM uczniowie,klasy WHERE uczniowie.ID_klasy=klasy.ID_klasy AND uczniowie.ID_klasy='$klasa';";
    $wyslanie=mysqli_query($laczenie,$zapytanie);

    if(mysqli_num_rows($wyslanie)==0)
    {
        echo "Brak uczniów w tej klasie";
    }
    else
    {
        echo "<table border='1' style='border-style:solid;'><tr style='background-color:lightgreen;'><td>Lp.</td><td>ID ucznia</td><td>Imię ucznia</td><td>Nazwisko ucznia</td><td>Klasa</td><td>Wychowawca</td></tr>";
        $i=1;
        while($x=mysqli_fetch_assoc($wyslanie))
        {
            echo "<tr style='background-color:lightgrey'><td>$i</td><td>".$x['ID_ucznia']."</td><td>".$x['Imie']."</td><td>".$x['Nazwisko']."</td><td>".$x['Nazwa_klasy']."</td><td>".$x['Wychowawca']."</td></tr>";
            $i++;
        };
    }
?>
