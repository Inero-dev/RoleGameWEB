


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Detalles de Criatura</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0 ">
        <?php
        require_once(dirname(__FILE__) . '\..\..\persistence\DAO\criaturaDAO.php');
        $creando= false;
        require_once(dirname(__FILE__) . '\..\..\templates\header.php');
        $criaturaDAO= new criaturaDAO();
        $id = $_GET['id'];
        $criatura= $criaturaDAO->selectById($id);
        echo '<div class="d-flex justify-content-center align-items-center w-100">
        <div class="card shadow " style="max-width: 40%;">
            <img src="'.$criatura->getAvatar() .'" class="card-img-top" alt="Imagen de la criatura">
            <div class="card-body text-center">
                <h1 class="card-title">'.$criatura->getNombre() .'</h1>
                <p class="card-text text-muted">'.$criatura->getDescripcion() .'</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Ataque:</strong> '.$criatura->getAttackpower() .'</li>
                    <li class="list-group-item"><strong>Vida:</strong> '.$criatura->getLifelevel() .'</li>
                    <li class="list-group-item"><strong>Arma:</strong> '.$criatura->getWeapon() .'</li>
                </ul>
            </div>
            </div>
        </div>';
        ?>
        
    </body>
</html>