<div class="p-5 text-center bg-light">
<h1 class="mb-3">Comedor Doña Mari</h1> <!--Heading banda de usuario-->

  <!-- Jumbotron -->

    <h1 class="mb-3">
    <?php echo $ven->idVenta != null ? $ven-> estado : ' Nueva Venta '; ?>
    </h1>

<ol class="breadcrumb">
  <li><a href="?c=Ventas"> Ventas / </a></li>
  <li class="active"><?php echo $ven->idVenta != null ? $ven-> idUsuario :  ' Nueva Venta '; ?></li>
</ol>

<form id="frm-ventas" action="?c=Ventas&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idVenta" value="<?php echo $ven->idVenta; ?>" />

<div class="form-group text-Left">
        <label>Nombre Usuario</label>
        <input type="text" name="idUsuario" id="buscar_usuario" value="<?php echo $ven->idUsuario; ?>" class="form-control" placeholder="Digite nombre" data-validacion-tipo="requerido|min:3" />
</div>
<div class="form-group text-Left">
        <label>Detalle</label>
        <input type="text" name="detalle" value="<?php echo $ven->detalle; ?>" class="form-control" placeholder="Ingrese el detalle de venta" data-validacion-tipo="requerido|min:3" />
</div>
<div class="form-group text-Left">
        <label>Fecha de Venta</label>
        <input type="date" name="fechaVenta" value="<?php echo $ven->fechaVenta; ?>" class="form-control" placeholder="Ingrese la fecha de Venta" data-validacion-tipo="requerido|min:3" />
</div>
<div class="form-group text-Left">
        <label>Fecha de Pago</label>
        <input type="date" name="fechaPago" value="<?php echo $ven->fechaPago; ?>" class="form-control" placeholder="Ingrese la fecha de pago"  />
</div>
<div class="form-group text-Left">
        <label>Monto</label>
        <input type="decimal" name="monto" value="<?php echo $ven->monto; ?>" class="form-control" placeholder="Ingrese el monto a cobrar" data-validacion-tipo="requerido|min:3" />
</div>
<div class="form-group text-Left">
        <label>Tipo de Pago</label>
        <select id="tipoPago" name="tipoPago">
         <option value="Contado">Contado</option>
         <option value="Credito">Credito</option>
        </select>
        </div>
        
        <div class="form-group text-Left">
        <label>Estado</label>
        <select id="estado" name="estado">
         <option value="Cancelado">Cancelado</option>
         <option value="Pendiente">Pendiente</option>
        </select>
        </div>

<div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-ventas").submit(function(){
            return $(this).validate();
        });
    })
</script>
  <!-- Jumbotron
<script> 
 jQuery(function(){ 
 $("#search").autocomplete("ajax-buscar-usuario.php");
 });
 </script>
<script type="text/javascript">
  $(function() {
     $( "#buscar_usuario" ).autocomplete({
       source: 'ajax-buscar-usuario.php',
     });
  });
</script>



-->