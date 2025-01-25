<?php

   $connection = mysqli_connect('localhost','root','','rezervisi_bp');
   
   if(isset($_POST['send'])){

      $ime = $_POST['ime'];
      $email = $_POST['email'];
      $telefon = $_POST['telefon'];
      $adresa = $_POST['adresa'];
      $lokacija = $_POST['lokacija'];
      $gosti = $_POST['gosti'];
      $prijava = $_POST['prijava'];
      $odjava = $_POST['odjava'];
      

      $request = " insert into rezervisi_form(ime, email, telefon, adresa, lokacija, gosti, prijava, odjava) values('$ime','$email','$telefon','$adresa','$lokacija','$gosti','$prijava','$odjava') ";
      mysqli_query($connection, $request);
      
      header('location:rezervisi.php'); 

   }else{
      echo 'nesto nije u redu, molimo pokusajte ponovo!';
   }

?>