
<?php require_once RUTA_APP . '/vistas/inc/header.php'; ?>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
    <?php foreach($datos['usuarios'] as $usuario): ?>
        <tr>
            <td> <?php echo $usuario->id_usuario; ?></td>
            <td> <?php echo $usuario->nombre; ?></td>
            <td> <?php echo $usuario->email; ?></td>
            <td> <?php echo $usuario->telefono; ?></td>
            <td><a href="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $usuario->id_usuario; ?>">Editar</a></td>
            <td><a href="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $usuario->id_usuario; ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<?php require_once RUTA_APP . '/vistas/inc/footer.php'; ?>