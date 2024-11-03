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
    $creando=false;
    require_once(dirname(__FILE__) . '/templates/header.php');
    require_once(dirname(__FILE__) . '/persistence/DAO/criaturaDAO.php');
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
        

        <!-- Creatures Section -->
        
            <?php
            $criaturaDAO = new criaturaDAO();
            $creatures = $criaturaDAO->selectAll();
            $contador=0;
            foreach ($creatures as $creature) {
                $contador+=1;
                if ($contador==1){
                    echo '</div>';
                    echo '<div class="row mt-5">';
                }
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="'.$creature->getAvatar().'" class="card-img" alt="'.$creature->getNombre().'">
                        <div class="card-body">
                            <h5 class="card-title">'. $creature->getNombre() .'</h5>
                            <p class="card-text">'.$creature->getDescripcion().'</p>
                            <div class="btn-group">
                                <a href="more_info.php?id=' . $creature->getId().'" class="btn btn-light" >Más información</a> 
                                <a href="./app/private/editarCriatura.php?id=' . $creature->getId().'" class="btn btn-success">Modificar</a>
                                <a href="./app/private/eliminarCriatura.php?id=' . $creature->getId().'" class="btn btn-danger">Exterminar</a>
                            </div>
                        </div>
                    </div>
                </div>';
                if ($contador%3==0){
                    echo '</div>';
                    echo '<div class="row mt-5">';
                }
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
