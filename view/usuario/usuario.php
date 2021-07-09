<div class="p-5 text-center bg-light">
<h1 class="mb-3">Comedor Doña Mari</h1> <!--Heading banda de usuario-->

  <!-- Jumbotron -->
    <h4 class="mb-3">Usuarios registrados</h4>

  <!-- Jumbotron -->
<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Usuario&a=Crud">Nuevo Usuario</a>
</div>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th style="width:60px;">Acciones</th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->direccion; ?></td>
            <td>
                <a href="?c=Usuario&a=Crud&idUsuario=<?php echo $r->idUsuario; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Usuario&a=Eliminar&idUsuario=<?php echo $r->idUsuario; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</div>
