<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($empleados as $empleado) {?>


        <tr>
            <td><?php echo $empleado->id; ?></td>
            <td><?php echo $empleado->nombre; ?></td>
            <td><?php echo $empleado->apellido; ?></td>
            <td><?php echo $empleado->edad; ?></td>
            <td><?php echo $empleado->email; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                <a href="" class="btn btn-info">Editar</a>
                <a href="" class="btn btn-danger">Eliminar</a>
            </div>
        </td>
        </tr>
<?php } ?>
    </tbody>
</table>
