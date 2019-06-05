 <!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exercice 2 Parite 3</title>
</head>

<body>
    <p>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
        </nav>
        <main>
            <!-- JUMBOTRON -->
            <div class="jumbotron">
                <h1 class="display-4">Exercice 2 Partie 3</h1>
                <p class="lead">Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
                <br>
                Tant que la première variable n'est pas supérieure à 20 :</p>
                <ul>
                    <li>multiplier la première variable avec la deuxième</li>
                    <li>afficher le résultat</li>
                    <li>l'incrementer</li>
                </ul>
                
                <hr class="my-4">
                
                <?php
                    $first = 1;
                    $second = rand(1, 100);


                    while ( $first<= 20) {

                        $first++;
                        $mult = $first*$second;
                        ?>
                    <p><?= 'La valeur est égale à'.$mult;?></p>
                    <?php 
                    }
                    ?>
            </div>
        </main>
</body>


</html>