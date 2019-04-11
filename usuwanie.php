<?php
    $iducznia=$_POST['iducznia'];
    
     //BAZA
    $host="localhost";
    $login="root";
    $haslo="";
    $db="szkola";
    $laczenie=mysqli_connect($host,$login,$haslo,$db) or die("Blad z polaczeniem");
    //

    $zapytanie="DELETE FROM uczniowie WHERE ID_ucznia='$iducznia'";
    $wyslanie=mysqli_query($laczenie,$zapytanie);

    if(!$wyslanie)
    {
        echo "Blad z usuwaniem ucznia";
    }
    else
    {
        echo "Pomyślnie usunięto ucznia";
    }
?>