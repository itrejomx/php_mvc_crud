<?php require_once RUTA_APP . '/vistas/inc/header.php'; ?>


<a href="<?php echo RUTA_URL; ?>/paginas">Regresar </a>
<div class="card card-body bg-light mt-5">
    <h2>Borrar usuario</h2>
    <form action="<?php echo RUTA_URL;?>/paginas/borrar/<?php echo $datos['id_usuario']; ?>" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre: <sup>*</sup></label>
            <input type="text" class="form-control form-control-lg" name="nombre" value="<?php echo $datos['nombre']; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" class="form-control form-control-lg" name="email" value="<?php echo $datos['email']; ?>">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono: <sup>*</sup></label>
            <input type="text" class="form-control form-control-lg" name="telefono" value="<?php echo $datos['telefono']; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Borrar Usuario">
    </form>
</div>

<?php require_once RUTA_APP . '/vistas/inc/footer.php'; ?>