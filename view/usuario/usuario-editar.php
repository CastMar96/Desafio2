<div class="p-5 text-center bg-light">
<h1 class="mb-3">Comedor Doña Mari</h1> <!--Heading banda de usuario-->

  <!-- Jumbotron -->

    <h1 class="mb-3">
    <?php echo $usu->idUsuario != null ? $usu->nombre : ' Nuevo Cliente '; ?>
    </h1>

<ol class="breadcrumb">
  <li><a href="?c=Usuario">Usuarios / </a></li>
  <li class="active"><?php echo $usu->idUsuario != null ? $usu->nombre : ' Nuevo Registro '; ?></li>
</ol>

<form id="frm-usuario" action="?c=Usuario&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idUsuario" value="<?php echo $usu->idUsuario; ?>" />
    
    <div class="form-group text-Left">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $usu->nombre; ?>" class="form-control" placeholder="Ingrese nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group text-left">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $usu->telefono; ?>" class="form-control" placeholder="Ingrese telefono" data-validacion-tipo="requerido|max:8" />
    </div>

    <div class="form-group text-left">
        <label>Direccion</label>
        <input type="text" name="direccion" value="<?php echo $usu->direccion; ?>" class="form-control" placeholder="Ingrese direccion" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-usuario").submit(function(){
            return $(this).validate();
        });
    })
</script>
  <!-- Jumbotron -->