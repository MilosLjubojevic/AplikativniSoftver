<?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
?>
 
<?php
 // Normalizacija unesenih podataka
 $ID = (int) @$_REQUEST['ID'];
 $Indeks  = mysqli_real_escape_string($bp, @$_POST['Indeks']);
 $Ime     = mysqli_real_escape_string($bp, @$_POST['Ime']);
 $Prezime = mysqli_real_escape_string($bp, @$_POST['Prezime']);
 $Adresa  = mysqli_real_escape_string($bp, @$_POST['Adresa']);
 $DatumRodjenja = mysqli_real_escape_string($bp, @$_POST['DatumRodjenja']);
 
 // Izmene podataka u bazi
 $upit = "update Studenti set Indeks='$Indeks', Ime='$Ime', Prezime='$Prezime', Adresa='$Adresa', DatumRodjenja='$DatumRodjenja'  where ID=$ID";
 $rezultat = mysqli_query($bp, $upit);
 if (!$rezultat)
   die(mysqli_error($bp));
 
  // Preusmeravanje na stranicu za prikaz
 die(header("Location: prikaz.php"));
?>

<?php 
  include_once('includes/footer.php');
?>
