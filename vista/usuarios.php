<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?controlador=usuario&accion=mostrarUsuario">Nuevo</a>
    <form id="formulario-busqueda">
        <input type="text" name="termino_busqueda" id="termino_busqueda">
        <input type="submit" value="Buscar">
    </form>
    <table id="tabla-resultados">
        <thead>
            <tr>
                <?php 
                    require_once ("core/constantes.php");
                    foreach(usuarioColumns as $value): 
                ?>
                <td><?php echo $value; ?></td>
            
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->consultarTodo() as $usuario):?>
                <tr>
                    <td><?php echo $usuario->nombre; ?></td>
                    <td><?php echo $usuario->apellido; ?></td>
                    <td><?php echo $usuario->edad; ?></td>
                    <td><?php echo $usuario->telefono; ?></td>
                    <td><a href="index.php?controlador=usuario&accion=mostrarUsuario&id=<?php echo $usuario->id; ?>">Editar</a></td>
                    <td><a href="index.php?controlador=usuario&accion=eliminar&id=<?php echo $usuario->id; ?>" onclick="javascript:return confirm('Seguro de eliminar?')" >Eliminar</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>