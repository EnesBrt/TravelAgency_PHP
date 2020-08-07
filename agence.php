<?php
  session_start();

  
  if (empty($_POST['nom']) && isset($_POST['nom'])) {
      header('Location: formulaire.php');
      exit();
  }
  
  if (empty($_POST['prenom']) && isset($_POST['prenom'])) {
    header('Location: formulaire.php');
    exit();

    if (empty($_POST['civi']) && isset($_POST['civi'])) {
        header('Location: formulaire.php');
        exit();
}

  $_SESSION['civi'] = $_POST['civi'];
  $_SESSION['nom'] = htmlspecialchars($_POST['nom']);
  $_SESSION['prenom']= htmlspecialchars($_POST['prenom']);



 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Choix</title>
</head>
<body class="bg-primary">
    
    <section>
    <h1 class="offset-4 mb-5 mt-5 text-white ">Choisiser votre séjour</h1>
    <?php  $choix = $_POST['exampleRadios'];
    
    

    if ($choix == 'c1') {
        
        echo "<div class='col-4 row offset-5 mx-auto my-5 py-5 card'>
            <form action='recapitulatif.php' method='post'>
                <select class='custom-select col-lg-12 mb-3' name='choiceTravel'>
                    <option selected >Choix voyage</option>
                    <option value='Les Maldives'>Les Maldives - 4500€ par pers</option>
                    <option value='Les bahamas'>Les bahamas - 5000€ par pers</option>
                    <option value='Polynésie'>Polynésie - 7000€ par pers</option>
                    <option value='Guam'>Guam - 3500€ par pers</option>
                </select>
                <div class='form-group'>
                    <label for='NombrePersonne1'>Nombres de  personnes</label>
                    <input type='text' class='form-control' id='NombrePersonne1' name='number' placeholder='Nombres de  personnes'>
                </div>
                <input class='btn btn-success' type='submit' value='Suite'>
            </form>
        </div>";
    } elseif ($choix == 'c2') { 
        
        echo "<div class='col-4 row offset-5 mx-auto my-5 py-5 card'>
            <form action='recapitulatif.php' method='post'>
                <select class='custom-select col-lg-12 mb-3' name='choiceTravel'>
                    <option selected >Choix Excursion</option>
                    <option value='Rome'>Visite de Rome- 100€ par pers</option>
                    <option value='Tokyo'>Visite de Tokyo - 500€ par pers</option>
                    <option value='Los Angeles'>Visite de Los Angeles - 700€ par pers</option>
                    <option value='Moscou'>Visite Moscou - 350€ par pers</option>
                </select>
                <div class='form-group'>
                    <label for='NombrePersonne2'>Nombres de  personnes</label>
                    <input type='text' class='form-control' id='NombrePersonne2' name='number' placeholder='Nombres de  personnes'>
                </div>
                <input class='btn btn-success' type='submit' value='Estimation'>
            </form>
        </div>";

    } 

    
    ?>    
    
    </section>
    
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>