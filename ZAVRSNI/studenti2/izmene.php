 <?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
 ?>
 
<?php 
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
  Prezime:<input type="text" name="Prezime" value="<?php echo $Student->Prezime; ?>" /><br>
  Adresa:<input type="text" name="Adresa" value="<?php echo $Student->Adresa; ?>" /> <br>
  Dat. rođ.:<input type="date" name="DatumRodjenja" value="<?php echo $Student->DatumRodjenja; ?>" /> <hr>
  
  <button type="submit">Izmene</button>
 </form>
 
 <?php 
  include_once('includes/footer.php');
 ?>