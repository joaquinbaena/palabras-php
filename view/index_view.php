<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabras</title>
</head>
<body>
    <h1>Palabras</h1>
    <a href="<?php echo DIRINDEX . '/add'; ?>">Añadir Palabra</a>
    <br>
    <br>
    <?php
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Palabra</th>";
    echo "<th>Created_at</th>";
    echo "<th>Editar</th>";
    echo "<th>eliminar</th>";
    echo "</tr>";
    foreach ($data as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['id'] . '</td>';
        echo '<td>' . $value['palabra'] . '</td>';
        echo '<td>' . $value['create_at'] . '</td>';
        echo '<td><a href="' . DIRINDEX . '/edit/' . $value['id'] . '">Editar</a></td>';
        echo '<td><a href="' . DIRINDEX . '/delete/' . $value['id'] . '">Eliminar</a></td>';
        echo '</tr>';
    }
    echo "</table>";
    ?>
</body>
</html>