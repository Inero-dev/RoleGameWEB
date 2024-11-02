<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes V - Comunidad de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="./assests/Styles/css.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php
    require_once(dirname(__FILE__) . '/templates/header.php');
    ?>
    <!-- Main content -->
    <div class="container mt-4">
        <!-- Banner and Call-to-Action -->
        <div class="row">
            <div class="col-md-8">
                <img src="./assests/img/heroes.webp" alt="Heroes V Banner" class="img-fluid">
            </div>
            <div class="col-md-4 text-center">
                <h2>Comunidad de usuarios de Heroes</h2>
                <p>La aventura comienza aquí, en tu navegador</p>
                <a href="play.php" class="btn btn-primary">Juega ahora!</a>
            </div>
        </div>

        <!-- Creatures Section -->
        <div class="row mt-5">
            <?php
            // Sample data for creatures
            $creatures = [
                [
                    "name" => "Nombre criatura 1",
                    "description" => "Descripción de la criatura 1. Por ejemplo: Los poderosos Centinelas son la primera línea de defensa del Sacro Imperio. Son voluntarios que han demostrado su lealtad al Emperador y su devoción a Elrath. Han jurado proteger a sus hermanos de armas con su pesado escudo y, si es necesario, con sus vidas. Para su protección personal, confían completamente en su fe.",
                    "image" => "./assests/img/personaje.webp"
                ],
                [
                    "name" => "Nombre criatura 2",
                    "description" => "Descripción de la criatura 2.",
                    "image" => "./assests/img/personaje.webp"
                ],
                [
                    "name" => "Nombre criatura 3",
                    "description" => "Descripción de la criatura 3.",
                    "image" => "./assests/img/personaje.webp"
                ]
            ];

            foreach ($creatures as $creature) {
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="'.$creature['image'].'" class="card-img" alt="'.$creature['name'].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$creature['name'].'</h5>
                            <p class="card-text">'.$creature['description'].'</p>
                            <div class="btn-group">
                                <a href="more_info.php" class="btn btn-light">Más información</a>
                                <a href="edit.php" class="btn btn-success">Modificar</a>
                                <a href="delete.php" class="btn btn-danger">Exterminar</a>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3 mt-4">
        <p>&copy; 2024 Heroes of Might and Magic V</p>
    </footer>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</body>
</html>
