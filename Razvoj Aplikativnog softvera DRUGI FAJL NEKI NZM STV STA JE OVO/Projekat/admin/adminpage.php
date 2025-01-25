<?php 

include('config/db_connect.php');

// pisanje query za sve rezervisi_form
$sql = 'SELECT id, ime, email, telefon, adresa, lokacija, gosti, prijava, odjava FROM rezervisi_form '; 


//dobijanje rezultata upita
$result = mysqli_query($conn, $sql);

//dobavljanje  dobijenih redova kao array
$rezervisi_form = mysqli_fetch_all($result, MYSQLI_ASSOC);

//oslobadjanje memorije povezane sa rezultatom
mysqli_free_result($result);

//zatvaranje konekcije
mysqli_close($conn);



?>

<!DOCTYOE HTML>
<html>

<?php include ('templates/header.php'); ?>

<h4 class="center grey-text">Rezervacije!</h4>
<div class="container">
    <div class="row">
     
     <?php foreach($rezervisi_form as $rezervisi){ ?>

        <div class="col s6 md3">
          
           <div class="card z-depth-0">
            <div class="card0-content center">
                <h6><?php echo htmlspecialchars($rezervisi['ime']); ?></h6>
                <div><?php echo htmlspecialchars($rezervisi['email']);  ?></div>
                <div><?php echo htmlspecialchars($rezervisi['telefon']);  ?></div>
                <div><?php echo htmlspecialchars($rezervisi['adresa']);  ?></div>
                <div><?php echo htmlspecialchars($rezervisi['lokacija']);  ?></div>
                <div><?php echo htmlspecialchars($rezervisi['gosti']);  ?></div>
                <div><?php echo htmlspecialchars($rezervisi['prijava']);  ?></div>
                <div><?php echo htmlspecialchars($rezervisi['odjava']);  ?></div>
            </div>
            <div class="card-action  right-align">
                <a  class="brand-text" href="details.php?id=<?php echo $rezervisi['id']?>">vise informacija</a>
            </div>
             
           </div>

        </div>

        <?php }?>

        

    </div>
</div>

<?php include ('templates/footer.php'); ?>
</html>
