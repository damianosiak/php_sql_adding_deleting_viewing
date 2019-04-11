<?php

    $imie=$_POST['wimie'];
    $nazwisko=$_POST['wnazwisko'];
    $klasa=$_POST['wklasa'];
    

    //BAZA
    $host="localhost";
    $login="root";
    $haslo="";
    $db="szkola";
    $laczenie=mysqli_connect($host,$login,$haslo,$db) or die("Blad z polaczeniem");
    //

    $zapytanie="INSERT INTO uczniowie (ID_ucznia, Imie, Nazwisko, ID_klasy ) VALUES ('NULL', '$imie', '$nazwisko', '$klasa');";
    //echo $zapytanie;
    $wyslanie=mysqli_query($laczenie,$zapytanie);
    if(!$wyslanie)
    {
        echo "Blad z dodawaniem ucznia";
    }
    else
    {
        echo "Pomyślnie dodano ucznia";
    }
    
?>