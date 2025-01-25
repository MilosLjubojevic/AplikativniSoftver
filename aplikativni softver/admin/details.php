<?php

include('config/db_connect.php');


if(isset($_POST['delete'])){

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM rezervisi_form WHERE id = $id_to_delete"; 

    if(mysqli_query($conn, $sql)){

        header('Location: admingpage.php');

    } {
        echo 'query error: ' . mysqli_error($conn);
    }
}

//provjera GET zahtjeva id parametra
if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM rezervisi_form WHERE id=$id";
    //dobijanje rezultata upita
    $result = mysqli_query($conn, $sql);
    
    //dohvatanje rezultata u array formatu
    $rezervisi = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn); 
}

?>


<!DOCTYPE html>
<html>

<?php include ('templates/header.php'); ?>

<div class="container center">
    <?php if($rezervisi):  ?>
    
        <h5>Rezervisao: <?php echo htmlspecialchars($rezervisi['ime']); ?></h5>
        <h5>Email: <?php echo htmlspecialchars($rezervisi['email']); ?></h5>
        <h4>Broj telefona: <?php echo htmlspecialchars($rezervisi['telefon']); ?></h4>
        <h4>Adresa: <?php echo htmlspecialchars($rezervisi['adresa']); ?></h4>
        <h4>Lokacija: <?php echo htmlspecialchars($rezervisi['lokacija']); ?></h4>
        <h4>Broj gostiju: <?php echo htmlspecialchars($rezervisi['gosti']); ?></h4>
        <h4>Datum prijave: <?php echo htmlspecialchars($rezervisi['prijava']); ?></h4>
        <h4>Datum odjave: <?php echo htmlspecialchars($rezervisi['odjava']); ?></h4>
        

        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $rezervisi['id'] ?>">
            <input type="submit" name="delete" value="Obrisi" class="btn brand z-depth-0">
        </form>

         
    <?php else: ?>

        <h5>Ne postoji registracija!</h5>

    <?php endif; ?>
    
</div>

<?php include ('templates/footer.php'); ?>

</html>