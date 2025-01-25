 <?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
 ?>

<?php
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