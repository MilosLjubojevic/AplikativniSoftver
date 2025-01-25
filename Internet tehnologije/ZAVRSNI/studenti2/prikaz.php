<?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
?>
 
 <table border="1">
  <thead>
   <tr>
    <th>ID</th><th>Indeks</th><th>Ime</th><th>Prezime</th><th>Adresa</th><th>Datum rođenja</th>
   </tr>
  </thead>
 <?php
  // Učitavanje podataka iz baze
  $upit = "select * from Studenti";
  $rezultat = mysqli_query($bp, $upit);
  if (!$rezultat)
    die(mysqli_error($bp));
 
  // Prikaz učitanih podataka
  while ($red = mysqli_fetch_object($rezultat)) {
    echo "<tr>\n";
    echo " <td>{$red->ID}</td>\n";
    echo " <td>{$red->Indeks}</td>\n";
    echo " <td>{$red->Ime}</td>\n";
    echo " <td>{$red->Prezime}</td>\n";
    echo " <td>{$red->Adresa}</td>\n";
    echo " <td>{$red->DatumRodjenja}</td>\n";
	echo " <td><a href='izmene.php?ID={$red->ID}'>Izmena</a></td>\n";
	echo " <td><a href='brisanje.php?ID={$red->ID}' onclick='if (!confirm(\"Da li ste sigurni?\")) return false;')>Brisanje</a></td>\n";
    echo "</tr>\n";
  }
?>
 </table>
 <a href="dodavanje.php">Dodavanje novog studenta</a>
 
<?php 
  include_once('includes/footer.php');
?>
