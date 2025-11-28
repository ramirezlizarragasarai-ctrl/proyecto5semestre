<!DOCTYPE html>
<html>
    <head>
        <title>Listado</title>

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;

                background-image: url('img/listado.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;

                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                min-height: 100vh;
            }

            .contenedor {
                background: rgba(240, 124, 159, 0.27);
                padding: 30px;
                border-radius: 12px;
                width: 80%;
                max-width: 800px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            }

            h1 {
                text-align: center;
                margin-bottom: 20px;
                color: #023805ff;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 15px;
            }

            th, td {
                border: 1px solid #033200ff;
                padding: 10px;
                text-align: center;
                font-size: 16px;
            }

            th {
                background-color: #c65381ff;
                color: white;
            }

            tr {
                background-color: rgba(254, 208, 223, 0.84);
            }

            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                background-color: #f73a8cff;
                color: white;
                padding: 10px 15px;
                border-radius: 6px;
                font-size: 16px;
                transition: 0.3s;
            }

            a:hover {
                background-color: #45a049;
            }
        </style>

    </head>

    <body>

        <div class="contenedor">
            <h1>Listado de Registros</h1>

            <?php
            $conexion = mysqli_connect("sql105.infinityfree.com", "if0_40539729", "PjfmbUlXPGB", "pruebasara");

            if(!$conexion){
                echo "Error: no se pudo conectar a MySQL.";
                exit;
            }

            $resultado = mysqli_query($conexion, "SELECT id, nombre, comentario FROM tabla1");
            ?>

            <table id="tabla">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Comentario</th>
                </tr>

                <?php
                while($fila = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['comentario'] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($conexion);
                ?>
            </table>

            <a href="formulario.php">Agregar registro nuevo</a>
            <br>
            <a href="index.html">regresar al interactivo</a>
        </div>

    </body>
</html>
