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
            require_once(dirname(__FILE__) . '/../utils/sessionHealper.php');
            sessionHealper::startSessionIfNotStarted();
            require_once(dirname(__FILE__) . '/../app/controllers/sessionController.php');
            if (sessionHealper::loggedIn()== false){
                echo "
                    <form class='d-flex ms-auto' method='POST'>
                        <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search' name='nombreUsuario'>
                        <input type='password' class='form-control me-2' type='search' placeholder='Search' aria-label='Search' name='contraseña' value='Contraseña33'>
                        <button class='btn btn-outline-success' type='submit' name='btnAccion' value='iniciar'>Iniciar sesión</button>
                    </form>";
            }
            else{
                echo "<form class='d-flex ms-auto' method='POST'><button class='btn btn-outline-success' type='submit' name='btnAccion' value='cerrar'>Cerrar Sesión</button></form>";
            }
            
        ?>
        
        
        

        
    </div>
</header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
