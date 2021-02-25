<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practicando conexion 4</title>
</head>
<body>
    <center>
    <h1>Practicando Conexion 4, con relacion</h1>
    <form action="index.php" method="post">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id"><br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"><br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido"><br><br>
    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" id="telefono"><br><br>
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario"><br><br>
    <label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" id="contraseña"><br><br>
    <label for="contraseña2">Repetir contra:</label>
    <input type="password" name="contraseña2" id="contraseña2"><br><br>
    <input type="submit" value="Confirmar" name="btnconfirmar">
    </form>
    </center>
    <?php 
    if (isset($_POST['btnconfirmar'])) {
        $_id = $_POST['id'];
        $_nombre = $_POST['nombre'];
        $_apellido = $_POST['apellido'];
        $_telefono = $_POST['telefono'];
    }
    ?>
</body>
</html>