<?php 
  include_once('includes/header.php');
?>

<?php

 // Povezivanje sa serverom baze podataka
 $bp = mysqli_connect("localhost", "root", "", "baza");
 if (!$bp)
   die('Greška u povezivanju sa serverom baze podataka.');

 // Normalizacija ulaznih podataka
 $Indeks  = mysqli_real_escape_string($bp, @ $_POST['Indeks']);
 $Ime     = mysqli_real_escape_string($bp, @ $_POST['Ime']);
 $Prezime = mysqli_real_escape_string($bp, @ $_POST['Prezime']);
 
 // Unos novog reda u tabelu
 $upit = "insert into Studenti (Indeks, Ime, Prezime) values ('$Indeks','$Ime', '$Prezime')";
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