<?php
require_once 'modelo/clsProductoCRUD.php';
$codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : '';
if ($codigo != "") {
	$crud = new ProductoCRUD();
	$producto = $crud->Obtener($codigo);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario De Registro</title>
        <link rel="stylesheet" type="text/css" href="vista/css/estilo.css">
    </head>
    <body>
	<div class="contenedor">
		<form action="<?php echo ($codigo != "") ? "?c=Producto&a=Actualizar&codigo=$codigo" : "?c=Producto&a=Registrar"; ?>" 
		class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">
				<input type="text" name="nombre" placeholder="Nombre" value ="<?php echo ($codigo != "") ? $producto->nombre : ""; ?>">
				<input type="text" name="precio" placeholder="Precio" value ="<?php echo ($codigo != "") ? $producto->codigo : ""; ?>">
				
				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
		</form>
	<script src="vista/scripts/formulario.js"></script>
</body>
</html>