<!DOCTYPE html>
<html>
    <head>
        <title>formulario</title>

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;

                background-image: url('img/formu.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;

                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            form {
                background: rgba(84, 113, 88, 0.85);
                padding: 30px;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                width: 300px;
                text-align: center;
            }

            input[type="text"] {
                width: 90%;
                padding: 8px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 6px;
            }

            #btnEnviar {
                margin-top: 15px;
                width: 100%;
                padding: 10px;
                border: none;
                background-color: #4CAF50;
                color: white;
                font-size: 16px;
                border-radius: 6px;
                cursor: pointer;
            }

            #btnEnviar:hover {
                background-color: #a04583ff;
            }
        </style>
    </head>

    <body>
        <form method="post" action="procesar.php">
            <h1>Registro</h1>
            <p>Nombre: <input name="campoNombre" type="text" /></p>
            <p>Comentario: <input name="campoComentario" type="text" /></p>        
            <p><input id="btnEnviar" type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>
