<!DOCTYPE html>
<html>
 <head>
        <meta charset="UTF-8">
        <title>Lista de Productos</title>
        <link  rel= "stylesheet" 
               type="text/css" 
               href="vista/css/estilos.css">
    </head>
    <body>
<center>
            <div>
                <a href="?c=Producto&a=Formulario">Nuevo Producto</a>
            </div>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Acciones</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->crud->Listar() as $item) :?>
                    <tr>;
                        <td><?php echo $item->codigo;?></td>
                        <td><?php echo $item->nombre;?></td>
                        <td><?php echo $item->precio;?></td>  
                        <td>
                            <div class = "contenedor-actions">
                                <a class="btn-edit" href="?c=Producto&a=Formulario&codigo=<?php echo $item->codigo;?>">Editar</a>
                                <a class="btn-delete" href="?c=Producto&a=Eliminar&codigo=<?php echo $item->codigo;?>">Eliminar</a>
                            </div>
                        </td>                     
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>              
</center>
    </body>
</html>