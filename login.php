<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/css/Styles.css">
    <title>Login & Register</title>
</head>

<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Already have an account?</h3>
                    <p>Log in for enter to CLAN Marketplace </p>
                    <button id="btn__iniciar-sesion">Log in</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Don't have an account?</h3>
                    <p>Sign up for Log in</p>
                    <button id="btn__registrarse">Sign Up</button>
                </div>
            </div>

            <!--Form login & register-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario.php" method="POST" class="formulario__login">
                    <h2>Log in</h2>
                    <input type="text" placeholder="E-mail" name="e_mail">
                    <input type="password" placeholder="Password" name="contrasena">
                    <button>GO!</button>
                </form>

                <!--Register-->
                <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                    <h2>Register</h2>
                    <input type="text" placeholder="Full name" name="nombre_completo">
                    <input type="text" placeholder="E-mail" name="e_mail">
                    <input type="text" placeholder="User" name="usuario">
                    <input type="password" placeholder="Password" name="contrasena">
                    <button>Sign up</button>
                </form>
            </div>
        </div>

        <script src="assets/js/script.js"></script>
    </main>
</body>

</html>