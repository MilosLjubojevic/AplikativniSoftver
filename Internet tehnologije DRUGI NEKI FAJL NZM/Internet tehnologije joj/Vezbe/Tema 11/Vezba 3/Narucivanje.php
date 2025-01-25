<?php
 $kolicinaGuma = htmlentities($_POST['kolicinaGuma']);
 $kolicinaUlja = htmlentities($_POST['kolicinaUlja']);
 $kolicinaSvecica = htmlentities($_POST['kolicinaSvecica']);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Auto delovi - porduzbina</title>
 </head>
 <body>
  <h1>Auto delovi</h1>
  <h2>Rezultati porudzbine</h2>
   <?php
    // echo '<p>Narudzbina porucena u '.date('H:i, d/m/Y').'</p>';
       echo '<p> Narudzbina porucena u '.date('H:i , jS F Y');  
    //j - je dan u mesecu bez pocetne nule
    //S - je sufkis th tipa 14th
    //F - je puno ime meseca
   #Za prikaz rezultata koji su prosledjeni kroz obrazac ovde seupisuju poslate vrednosti za prikaze u Veb čitaču ispod ostalog koda
   echo '<p> Vasa porudzbina je sledeca: </p>';
   echo $kolicinaGuma. ' gume </br>';
   echo $kolicinaUlja. ' ulje </br>';
   echo $kolicinaSvecica. ' svecice </br>';
  ?>
 </body>
</html>