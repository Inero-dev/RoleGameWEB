<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Crear Criatura</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body >
        <!-- Header -->
        <?php
        require_once(dirname(__FILE__) . '\..\templates\header.php');
        ?>
        <form class="p-5 m-0 border-0 m-0 border-0" method="POST">
            <div class="row mb-3">
                <label for="inNombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inNombre" required="true" name="inNombre">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inDescripcion" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inDescripcion" required="true" name="inDescripcion">
                </div>
            </div>  
            <div class="row mb-3">
                <label for="inAvatar" class="col-sm-2 col-form-label" >Avatar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="inAvatar" required="true" name="inAvatar">
                </div>
            </div> 
            <div class="row mb-3">
                <label for="inAttack" class="col-sm-2 col-form-label">Attack Power</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inAttack" required="true" name="inAttack">
                </div>
            </div> 
            <div class="row mb-3">
                <label for="inLifeLevel" class="col-sm-2 col-form-label">Life Level</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inLifeLevel" required="true" name="inLifeLevel">
                </div>
            </div> 
            <div class="row mb-3">
                <label for="inWeapon" class="col-sm-2 col-form-label">Weapon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inWeapon" required="true" name="inWeapon">
                </div>
            </div> 
            <button type="submit" class="btn btn-light">Enviar</button>
        </form>


    </body>
</html>