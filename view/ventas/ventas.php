<div class="p-5 text-center bg-light">
<h1 class="mb-3">Comedor Doña Mari</h1> <!--Heading banda de usuario-->
  <!-- Jumbotron -->
    <h4 class="mb-3">Ventas Registradas</h4>
  <!-- Jumbotron -->
<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Ventas&a=Crud">Nueva Venta</a>
    <a class="btn btn-secondary" href="?c=Ventas&a=VentasP">Pagos pendientes</a>
</div>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre Usuario</th>
            <th>Detalle</th>
            <th>Fecha Venta</th>
            <th>Fecha Pago</th>
            <th>Monto</th>
            <th>Tipo de pago</th>
            <th>Estado</th>
            <th style="width:60px;">Acciones</th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->detalle; ?></td>
            <td><?php echo $r->fechaVenta; ?></td>
            <td><?php echo $r->fechaPago; ?></td>
            <td><?php echo $r->monto; ?></td>
            <td><?php echo $r->tipoPago; ?></td>
            <td><?php echo $r->estado; ?></td>
            <td>
                <a href="?c=Ventas&a=Crud&idVenta=<?php echo $r->idVenta; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Ventas&a=Eliminar&idVenta=<?php echo $r->idVenta; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</div>
