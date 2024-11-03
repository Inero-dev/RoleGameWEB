<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-start align-items-center">
        <a href="/RolePlayingGame/index.php"><img src="/RolePlayingGame/assests/img/logoHeroesV.png" alt="Heroes V" id="logo" class="align-baseline me-3"></a>
        <?php
            if ($creando== false){
                echo '<a href="/RolePlayingGame/app/private/crearCriatura.php" type="button" class="btn btn-link text-white">Crear una criatura</a>';
            }
            else{
                echo '<h1>Creando una Criatura';
            }
        ?>
        

        
    </div>
</header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
