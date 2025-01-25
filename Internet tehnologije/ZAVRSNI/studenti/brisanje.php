 <?php 
  include_once('includes/header.php');
 ?>

<?php
 // Povezivanje sa serverom baze podataka
 $bp = mysqli_connect("localhost","root","","baza");
 if (!$bp)
   die('Greška pri povezivanju s bazom podataka.');

 // Normalizacija unlaznih podataka
 $ID = (int) @$_REQUEST['ID'];
 
 // Uklanjanje izabranog reda
 $upit = "delete from Studenti where ID=$ID";
 $rezultat = mysqli_query($bp, $upit);
 if (!$rezultat)
   die(mysqli_error($bp));

 // Preusmeravanje na stranicu pregleda
 die(header("Location: prikaz.php"));
?>
 
<?php 
  include_once('includes/footer.php');
?>