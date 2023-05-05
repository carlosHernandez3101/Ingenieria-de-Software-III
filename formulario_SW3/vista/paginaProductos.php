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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->crud->Listar() as $item) :?>
                    <tr>;
                        <td><?php echo $item->codigo;?></td>
                        <td><?php echo $item->nombre;?></td>
                        <td><?php echo $item->precio;?></td>                       
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>              
        </center>
    </body>
</html>