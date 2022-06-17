<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir palabra</title>
</head>
<body>
    <h1>añadir palabra</h1>
    <form method="post">
        Palabra a añadir: <input type="text" name="word" value="<?php echo $data['word']; ?>">
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>