<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>rezervisi</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header sekcija pocinje  -->

<<section class="header">

<a href="pocetna.php" class="logo">putuj.</a>

<nav class="navbar">
   <a href="pocetna.php">pocetna</a>
   <a href="onama.php">o nama</a>
   <a href="ponude.php">ponude</a>
   <a href="rezervisi.php">rezervisi</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header sekcija zavrsava -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>rezervisi sada</h1>
</div>

<!-- rezervisi sekcija pocinje  -->

<section class="booking">

   <h1 class="heading-title">rezervisi svoje putovanje!</h1>

   <form action="rezervisi_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>ime :</span>
            <input type="text" placeholder="unesite vase ime" name="ime">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="unesite vas email" name="email">
         </div>
         <div class="inputBox">
            <span>broj telefona :</span>
            <input type="number" placeholder="unesite vas broj telefona" name="telefon">
         </div>
         <div class="inputBox">
            <span>adresa :</span>
            <input type="text" placeholder="unesite vasu adresu" name="adresa">
         </div>
         <div class="inputBox">
            <span>gdje :</span>
            <input type="text" placeholder="mjesto koje zelite da posjetite" name="lokacija">
         </div>
         <div class="inputBox">
            <span>koliko :</span>
            <input type="number" placeholder="broj gostiju" name="gosti">
         </div>
         <div class="inputBox">
            <span>prijava :</span>
            <input type="date" name="prijava">
         </div>
         <div class="inputBox">
            <span>odjava :</span>
            
            <input type="date" name="odjava">
         </div>
      </div>

      <input type="submit" value="posalji" class="btn" name="send">

   </form>

</section>

<!-- rezervisi sekcija zavrsava -->

















<!-- footer sekcija pocinje -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>brzi linkovi</h3>
         <a href="pocetna.php"> <i class="fas fa-angle-right"></i> pocetna</a>
         <a href="onama.php"> <i class="fas fa-angle-right"></i> o nama</a>
         <a href="ponude.php"> <i class="fas fa-angle-right"></i> ponude</a>
         <a href="rezervisi.php"> <i class="fas fa-angle-right"></i> rezervisi</a>
      </div>

      <div class="box">
         <h3>dodatni linkovi</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> postavite pitanje</a>
         <a href="#"> <i class="fas fa-angle-right"></i> o nama</a>
         <a href="#"> <i class="fas fa-angle-right"></i> polisa privatnosti</a>
         <a href="#"> <i class="fas fa-angle-right"></i> pravila koristenja</a>
      </div>

      <div class="box">
         <h3>kontakt</h3>
         <a href="#"> <i class="fas fa-phone"></i> +387-66-111-222 </a>
         <a href="#"> <i class="fas fa-phone"></i> +387-55-222-333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> trisa.zvezdas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> bijeljina  </a>
      </div>

      <div class="box">
         <h3>zapratite nas</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> whatsapp </a>
      </div>

   </div>

   <div class="credit"> napravio <span>Nikola Trisic</span> | sva prava rezervisana! </div>

</section>

<!-- footer sekcija zavrsava -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>