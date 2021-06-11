<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 4</title>
</head>
<body>
    <p>
        Créer une variable âge aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            $randomAge = mt_rand(0,115);
            echo "$randomAge ans :</br>";
            if($randomAge >= 18){
                echo "WTF t'es majeur !</br>";
            }else{
                echo "T'es mineur</br>";
            }
        ?>
    </div>
</body>
</html>