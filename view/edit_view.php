<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Palabra</title>
</head>
<body>
    <h1>Editar palabra</h1>
    <form method="post">
        <input type="text" name="id" value="<?php echo $data['id'] ?>">
        <input type="text" name="word" placeholder="Palabra">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>