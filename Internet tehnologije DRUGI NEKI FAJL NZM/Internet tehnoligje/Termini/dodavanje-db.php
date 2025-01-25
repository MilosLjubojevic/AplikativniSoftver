<?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
?>

<?php

 // Normalizacija ulaznih podataka
 $datum = mysqli_real_escape_string($bp, @ $_POST['datum']);
 $vreme = mysqli_real_escape_string($bp, @ $_POST['vreme']);
 $vrsta = mysqli_real_escape_string($bp, @ $_POST['vrsta']);
 $imeKlijenta = mysqli_real_escape_string($bp, @ $_POST['imeKlijenta']);
 $prezimeKlijenta = mysqli_real_escape_string($bp, @ $_POST['prezimeKlijenta']);
 $imeTrenera = mysqli_real_escape_string($bp, @ $_POST['imeTrenera']);
 $prezimeTrenera = mysqli_real_escape_string($bp, @ $_POST['prezimeTrenera']);
 
 // Unos novog reda u tabelu
 $upit = "insert into termini (datum, vreme, vrsta, imeKlijenta, prezimeKlijenta, imeTrenera, prezimeTrenera) values ('$datum','$vreme', '$vrsta','$imeKlijenta', '$prezimeKlijenta', '$imeTrenera', '$prezimeTrenera')";
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