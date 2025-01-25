<?php 
  include_once('includes/header.php');
?>
 
 <form action="dodavanje-db.php" method="post">
  datum:<input type="date" name="datum">
  vreme:<input type="time" name="vreme">
  vrsta:<select name="vrsta">
    <option value="1">personalni</option>
    <option value="2">vodjeni</option>
    <option value="3">dijagnostika</option>
  </select>
  ime Klijenta:<input type="text" name="imeKlijenta">
  prezime Klijenta: <input type="text" name="prezimeKlijenta"><br>
  ime Trenera: <input type="text" name="imeTrenera"><br>
  prezime Trenera: <input type="text" name="prezimeTrenera"><br><br>
  <button type="submit">Dodavanje</button>
 </form>
   
<?php 
  include_once('includes/footer.php');
?>