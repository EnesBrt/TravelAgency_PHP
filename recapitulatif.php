
<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Récapitulatif</title>
</head>
<body class="bg-primary">
    <section>
   
    <?php    
    
    $nom = $_SESSION['nom'] . "<br>";
    $prenom = $_SESSION['prenom'];
    $number = $_POST['number'] . "<br>";
    $civilite = $_SESSION['civi'] . "<br>";
    $choiceTravel = $_POST['choiceTravel'];
    
    $number = intval($number);

    if ($choiceTravel == 'Les Maldives') {
        $price = 4500;
    
    } elseif ($choiceTravel == 'Les bahamas') {
        $price = 5000;
    
    } elseif ($choiceTravel == 'Polynésie') {
        $price = 7000;
    
    } elseif ($choiceTravel == 'Guam') {
        $price = 3500;
    
    } elseif ($choiceTravel == 'Rome') {
        $price = 100;
    
    } elseif ($choiceTravel == 'Tokyo') {
        $price = 500;
    
    } elseif ($choiceTravel == 'Los Angeles') {
        $price = 700;
    
    } elseif ($choiceTravel == 'Moscou') {
        $price = 350;
    
    }
    
    $Totalprice = $price * $number;

    echo "  <div class='bg-light col-6 dblock mx-auto my-5 rounded-lg mb-4'>
    <h1><strong>Résumé de votre demande</strong></h1>

    <p>Bonjour, <strong>$civilite $nom $prenom</strong></p>
    <p>Vous avez choisi un séjour à <strong>$choiceTravel</strong> au prix de <strong>$price  €</strong> par personnes</p>
    <p>Vous nous avez indiqué <strong>$number</strong> personnes</p>
    <p>Le montant total est de <strong>$Totalprice €</strong></p>
    

    </div>";
  
    ?>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>
