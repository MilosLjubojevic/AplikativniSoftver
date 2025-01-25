<?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
?>

<?php

 // Normalizacija ulaznih podataka
 $Indeks  = mysqli_real_escape_string($bp, @ $_POST['Indeks']);
 $Ime     = mysqli_real_escape_string($bp, @ $_POST['Ime']);
 $Prezime = mysqli_real_escape_string($bp, @ $_POST['Prezime']);
 $Adresa  = mysqli_real_escape_string($bp, @ $_POST['Adresa']);
 $DatumRodjenja = mysqli_real_escape_string($bp, @ $_POST['DatumRodjenja']);
 
 // Unos novog reda u tabelu
 $upit = "insert into Studenti (Indeks, Ime, Prezime, Adresa,DatumRodjenja) values ('$Indeks','$Ime', '$Prezime','$Adresa', '$DatumRodjenja')";
 $rezultat = mysqli_query($bp, $upit);
 if (!$rezultat)
   die(mysqli_error($bp));

 // Prekid veze sa serverom baze podataka
 mysqli_close($bp);
 
 // Preusmeravanje na stranicu za prikaz
 die(header("Location: prikaz.php"));
 
?>

<?php 
  include_once('includes/footer.php');
?>