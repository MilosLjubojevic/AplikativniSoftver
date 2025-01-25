<?php 
  include_once('includes/header.php');
?>
 
 <form action="dodavanje-db.php" method="post">
  Indeks:<input type="text" name="Indeks">
  Ime:<input type="text" name="Ime">
  Prezime: <input type="text" name="Prezime"><br>
  Adresa: <input type="text" name="Adresa"><br>
  Dat. rođ.: <input type="date" name="DatumRodjenja"><br><br>
  <button type="submit">Dodavanje</button>
 </form>
   
<?php 
  include_once('includes/footer.php');
?>