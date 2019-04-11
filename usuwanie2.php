<?php
    $iimie=$_POST['uimie2'];
    $inazwisko=$_POST['unazwisko2'];
    $iklasa=$_POST['usklasa'];
    
     //BAZA
    $host="localhost";
    $login="root";
    $haslo="";
    $db="szkola";
    $laczenie=mysqli_connect($host,$login,$haslo,$db) or die("Blad z polaczeniem");
    //
    
    $zapytanie0="SELECT uczniowie.Imie,uczniowie.Nazwisko,uczniowie.ID_klasy WHER (uczniowie.Imie='$iimie' AND uczniowie.Nazwisko='$inazwisko' AND uczniowie.ID_klasy='$iklasa')";
    $zapytanie="DELETE FROM uczniowie WHERE (uczniowie.Imie='$iimie' AND uczniowie.Nazwisko='$inazwisko' AND uczniowie.ID_klasy='$iklasa')";
    $wyslanie0=mysqli_query($laczenie,$zapytanie0);
    $wyslanie=mysqli_query($laczenie,$zapytanie);

    if(!$wyslanie)
    {
      echo "Blad z usuwaniem ucznia";
    }
    else if(mysqli_num_rows($wyslanie0)==0)
    {
        
        echo "Brak takiego ucznia w klasie";
    }
    else
    {
        echo "Pomyślnie usunięto ucznia";
    }
    echo $wyslanie0;
?>