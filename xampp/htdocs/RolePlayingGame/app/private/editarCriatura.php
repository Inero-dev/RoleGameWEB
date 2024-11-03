<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Editar Criatura</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">
        <?php
        $creando=false;
        require_once(dirname(__FILE__) . '\..\..\templates\header.php');
        require_once(dirname(__FILE__) . '\..\..\persistence\DAO\criaturaDAO.php');
        $paginaInicial='editar'; //en la pagina llamada estaran disponibles estas variables
        $criaturaDAO= new criaturaDAO();
        if (!isset($_GET['id'])) {
            die("ID de la criatura no especificado.");
        }
        $id = $_GET['id']; //el id que obtiene del boton
        $criaturaAEditar= $criaturaDAO->selectById($id);
        require_once(dirname(__FILE__) . '\..\..\templates\frmCriatura.php');
        require_once(dirname(__FILE__) . '\..\controllers\frmCriaturaController.php');
        ?>
    </body>
</html>


