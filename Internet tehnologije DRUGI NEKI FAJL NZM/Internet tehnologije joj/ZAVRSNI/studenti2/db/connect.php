 <?php
 
 // Povezivanje sa serverom baze podataka
 $bp = mysqli_connect("localhost", "root", "", "baza2");
 if (!$bp)
   die('Greška u povezivanju sa serverom baze podataka.');

?>