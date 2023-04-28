<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabla de productos</title>
</head>
<body>
    <center>
        <table border="1">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($lstProductos as $item) {
                       echo '<tr>';
                       echo '<td>'.$item["codigo"].'</td>';
                       echo '<td>'.$item["nombre"].'</td>';
                       echo '<td>'.$item["precio"].'</td>';
                       echo '</tr>';
                    }                
                ?>
            </tbody>
        </table>
    </center>
    
</body>
</html>
