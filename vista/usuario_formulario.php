<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <form action="index.php?controlador=usuario&accion=guardar" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
        <table>
            <tr>
                <td>nombre</td>
                <td>
                    <input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>">
                </td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td>
                    <input type="text" name="apellido" value="<?php echo $usuario->apellido; ?>">
                </td>
            </tr>
            <tr>
                <td>edad</td>
                <td>
                    <input type="int" name="edad" value="<?php echo $usuario->edad; ?>">
                </td>
            </tr>
            <tr>
                <td>telefono</td>
                <td>
                    <input type="text" name="telefono" value="<?php echo $usuario->telefono; ?>">
                </td>
            </tr>
        </table>
        <button type="submit">Guardar</button>

    </form>
</body>
<script src="busqueda.js"></script>
</html>
