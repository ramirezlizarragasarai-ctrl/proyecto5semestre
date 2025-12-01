<!DOCTYPE html>
<html>
    <head>
        <title>procesar</title>

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;

                background-image: url('img/proc.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;

                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                color: #000000ff;
            }

            .contenedor {
                background: rgba(236, 246, 165, 0.71);
                padding: 30px;
                border-radius: 12px;
                width: 400px;
                text-align: center;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            }

            h1 {
                color: #de2868ff;
            }

            p {
                font-size: 20px;
                margin: 10px 0;
            }
            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                background-color: #de3d95ff;
                color: white;
                padding: 10px 15px;
                border-radius: 6px;
                font-size: 16px;
                transition: 0.3s;
            }

            a:hover {
                background-color: #45a049;
            }

            .mensaje-exito {
                font-weight: bold;
                color: #1b5e20;
                background: #c8e6c901;
                padding: 20px;
                border-radius: 16px;
                margin-bottom: 20px;
            }
        </style>
    </head>

    <body>

        <div class="contenedor">
            <?php
                $nombre_post = $_POST['campoNombre'];
                $comentario_post = $_POST['campoComentario'];

                $conexion = mysqli_connect("sql102.infinityfree.com", "if0_40569846", "xDo56CfCtq0k0VK", "if0_40569846_pruebasara");

                if(!$conexion){
                    echo "<div class='mensaje-error'>Error al conectar con MySQL.</div>";
                    exit;
                }

                $sql = "INSERT INTO tabla1 (nombre, comentario) VALUES ('$nombre_post', '$comentario_post')";
                if (mysqli_query($conexion, $sql)) {
                    echo "<div class='mensaje-exito'>Registro insertado correctamente</div>";
                } else {
                    echo "<div class='mensaje-error'>Error al realizar el registro</div>";
                }
            ?>

            <h1>Felicidades <?php echo $nombre_post; ?>!</h1>

            <p><strong>Nombre:</strong> <?php echo $nombre_post; ?></p>        
            <p><strong>Comentario:</strong> <?php echo $comentario_post; ?></p>
            <p><a href="index.html">Volver al interactivo</a></p>
            <p><a href="listado.php">Ver libro de visitas</a></p>
            </div>

    </body>
</html>
