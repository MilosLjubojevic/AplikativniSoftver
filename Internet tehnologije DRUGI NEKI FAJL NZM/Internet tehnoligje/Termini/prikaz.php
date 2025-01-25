<?php 
  include_once('includes/header.php');
  include_once('db/connect.php');
?>
 
 <table border="1">
  <thead>
   <tr>
    <th>id</th><th>datum</th><th>vreme</th><th>vrsta</th><th>ime Klijenta</th><th>prezime Klijenta</th><th>ime Trenera</th><th>prezime Trenera</th>
   </tr>
  </thead>
 <?php
  // Učitavanje podataka iz baze
  $upit = "select * from termini";
  $rezultat = mysqli_query($bp, $upit);
  if (!$rezultat)
    die(mysqli_error($bp));
 
  // Prikaz učitanih podataka
  while ($red = mysqli_fetch_object($rezultat)) {
    echo "<tr>\n";
    echo " <td>{$red->id}</td>\n";
    echo " <td>{$red->datum}</td>\n";
    echo " <td>{$red->vreme}</td>\n";
    echo " <td>{$red->vrsta}</td>\n";
    echo " <td>{$red->imeKlijenta}</td>\n";
    echo " <td>{$red->prezimeKlijenta}</td>\n";
    echo " <td>{$red->imeTrenera}</td>\n";
    echo " <td>{$red->prezimeTrenera}</td>\n";


	echo " <td><a href='izmene.php?id={$red->id}'>Izmena</a></td>\n";
	echo " <td><a href='brisanje.php?id={$red->id}' onclick='if (!confirm(\"Da li ste sigurni?\")) return false;')>Brisanje</a></td>\n";
    echo "</tr>\n";
  }
?>
 </table>
 <a href="dodavanje.php">Dodavanje novog studenta</a>
 
<?php 
  include_once('includes/footer.php');
?>
