<?php

    include 'connection_be.php';

    $e_mail = $_POST['e_mail'];
    $contrasena = $_POST['contrasena'];

    $checker_login = msqli_query($connection, "SELECT * FROM usuarios WHERE e_mail = '$e_mail' and contrasena = '$contrasena'");

    if(mysqli_num_rows($checker_login)>0){
        
        $_SESSION['usuario'] = $correo;

        header("location: index.html");
        exit();
    }
    else{
        echo '
            <script>
                alert("The user does not exist!");
                window.location = "../login.php";
            </script>
        ';
        exit();
        mysqli_close($connection);
    }


?>