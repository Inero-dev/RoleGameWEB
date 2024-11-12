
<form class="p-5 m-0 border-0 m-0 border-0" method="POST">
    <div class="row mb-3">
        <label for="inNombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inNombre"  name="inNombre" <?php if ($paginaInicial!='insertar'){echo 'value='.$criaturaAEditar->getNombre();} ?>>
        </div>
    </div>
    <div class="row mb-3">
        <label for="inDescripcion" class="col-sm-2 col-form-label">Descripción</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inDescripcion"  name="inDescripcion" <?php if ($paginaInicial!='insertar'){echo 'value='.$criaturaAEditar->getDescripcion();} ?>>
        </div>
    </div>  
    <div class="row mb-3">
        <label for="inAvatar" class="col-sm-2 col-form-label" >Avatar (url de la foto)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inAvatar"  name="inAvatar" <?php if ($paginaInicial!='insertar'){echo 'value='.$criaturaAEditar->getAvatar();} ?>>
        </div>
    </div> 
    <div class="row mb-3">
        <label for="inAttack" class="col-sm-2 col-form-label">Attack Power</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inAttack"  name="inAttack" <?php if ($paginaInicial!='insertar'){echo 'value='.$criaturaAEditar->getAttackpower();} ?>>
        </div>
    </div> 
    <div class="row mb-3">
        <label for="inLifeLevel" class="col-sm-2 col-form-label">Life Level</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inLifeLevel"  name="inLifeLevel" <?php if ($paginaInicial!='insertar'){echo 'value='.$criaturaAEditar->getLifeLevel();} ?>>
        </div>
    </div> 
    <div class="row mb-3">
        <label for="inWeapon" class="col-sm-2 col-form-label">Weapon</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inWeapon"  name="inWeapon" <?php if ($paginaInicial!='insertar'){echo 'value='.$criaturaAEditar->getWeapon();} ?>>
        </div>
    </div> 
    <button class="btn btn-light"><?php echo strtoupper($paginaInicial)  ?></button>
</form>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
