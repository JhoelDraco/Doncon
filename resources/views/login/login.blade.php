<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- Ajusta la ruta de tu archivo CSS -->
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Tic & Centec</h3>
                        <p>Olvidaste Tu contrasena?</p>
                        <button id="btn__registrarse">Olvide mi contrasenia</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Formulario de Login-->
                    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="name" placeholder="Nombre Usuario" name="name">
                        <input type="email" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Formulario de Registro-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Llena Datos para tu verificaion</h2>
                        <input type="text" placeholder="Nombre de Usuario" name="nombre_completo">
                        <input type="email" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Ultima Contrasena" name="contrasena">
                        <button>Solicitar</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>