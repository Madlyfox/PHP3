 <!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exercice 4 Parite 3</title>
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
                <h1 class="display-4">Exercice 4 Partie 3</h1>
                <p class="lead">Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
                <ul>
                    <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
                    <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
                    <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
                </ul>
                
                <hr class="my-4">
                
                    <?php
                    $first = 1;
                    $div = ($first/2);
                    


                    while ( $first<10) {

                        $first++;
                       } 
                        ?>
                    <p><?php echo $first;?></p>
                    <?php 
                    }
                    ?>
        </main>
</body>


</html>