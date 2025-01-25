 <?php
 
 // Povezivanje sa serverom baze podataka
 $bp = mysqli_connect("localhost", "root", "", "termini_db");
 if (!$bp)
   die('Greška u povezivanju sa serverom baze podataka.');

?>