

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    
    <title>Cool Travel</title>

</head>
<body class="bg-primary">

    <section>
        
        <div class="jumbotron jumbotron-fluid bg-danger">
            <div class="container text-center">
                <h1 class="text-white"><strong>Cool travel</strong></h1>
                <p class="lead text-white">Réalisez vos plus beaux voyage de votre vie !</p>
                <img src="agences.jpg" alt="image" class="img-responsive rounded" />
            </div>
            <hr class="mb-2">
            
        </div>

        <div class=" col-4 row offset-4 my-5 py-5 card">
            <form class="" action="agence.php" method="post">
                <select class="custom-select col-md-4 ml- mb-3" name="civi">
                    <option selected>Civilité</option>
                    <option value="M">M</option>
                    <option value="Mme">Mme</option>
                </select>
                <div class="input-group col-lg-14 mb-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nom et Prénom</span>
                </div> 
                <input type="text" aria-label="nom" class="form-control" name="nom">
                <input type="text" aria-label="prenom" class="form-control" name=prenom>
                </div>
                <div class="form-check">
               
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="c1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Voyage
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="c2">
                    <label class="form-check-label" for="exampleRadios2">
                        Excursion
                    </label>
                </div>
                <div class="col-sm-10">
                        <input class="btn btn-success" type="submit" value="Suite">
                </div>
                    
                </div>
            </form>
        </div>

    </section>



  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>

