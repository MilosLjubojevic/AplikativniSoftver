<?php 
  include_once('includes/header.php');
?>
 
<?php
 // Povezivanje sa serverom baze podataka
 $bp = mysqli_connect("localhost", "root", "", "baza");
 if (!$bp)
   die('Greška u povezivanju s bazom podataka.');

 // Normalizacija unesenih podataka
 $ID = (int) @$_REQUEST['ID'];
 $Indeks  = mysqli_real_escape_string($bp, @$_POST['Indeks']);
 $Ime     = mysqli_real_escape_string($bp, @$_POST['Ime']);
 $Prezime = mysqli_real_escape_string($bp, @$_POST['Prezime']);
 
 // Izmene podataka u bazi
 $upit = "update Studenti set Indeks='$Indeks', Ime='$Ime', Prezime='$Prezime'  where ID=$ID";
 $rezultat = mysqli_query($bp, $upit);
 if (!$rezultat)
   die(mysqli_error($bp));
 
  // Preusmeravanje na stranicu za prikaz
 die(header("Location: prikaz.php"));
?>

<?php 
  include_once('includes/footer.php');
?>
