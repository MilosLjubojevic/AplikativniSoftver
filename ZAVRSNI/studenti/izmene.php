 <?php 
  include_once('includes/header.php');
 ?>
 
<?php 
 // Povezivanje sa serverom baze podataka
 $bp = mysqli_connect("localhost", "root", "", "baza");
 if (!$bp)
   die('Greška u povezivanju s bazom podataka.');

 // Normalizacija ulaznih podataka
 $ID = (int) @$_REQUEST['ID'];
 
 // Učitavanje podataka iz baze
 $upit = "select * from Studenti where ID=$ID";
 $rezultat = mysqli_query($bp, $upit);
 if (!$rezultat)
   die(mysqli_error($bp));

 // Provera da li postoji traženi red
 if (mysqli_num_rows($rezultat) != 1)
   die('Ne postoji student sa zadanim ID');
 
 // Prenos rezultata u objekt 'Student'
 $Student = mysqli_fetch_object($rezultat);
?>
  
 <form action="izmene-db.php" method="post">
  ID:<input type="text" name="ID" value="<?php echo $Student->ID; ?>" readonly /> <br>
  Indeks:<input type="text" name="Indeks" value="<?php echo $Student->Indeks; ?>" /> <br>
  Ime:<input type="text" name="Ime" value="<?php echo $Student->Ime; ?>" /> <br>
  Prezime:<input type="text" name="Prezime" value="<?php echo $Student->Prezime; ?>" /> <hr>
  <button type="submit">Izmene</button>
 </form>
 
 <?php 
  include_once('includes/footer.php');
 ?>