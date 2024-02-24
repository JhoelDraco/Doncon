<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <h2>INICIAR SESION</h2>
            <div>
                <label for="nombre_usuario">Nombre de usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" required>
            </div>
            <div>
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <div>
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
                <div>
                <button type="submit">Iniciar sesión</button>
            </div>
        
             <div>
                 <img src="{{ asset('imagenes/logoinicio.jpg') }}" alt="Descripción de la imagen">
            </div>
        </form>



    </div>
</body>
</html>

