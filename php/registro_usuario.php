<?php

    include 'connection_be.php';

    //Get data from HTML's textfields

    $nombre_completo = $_POST['nombre_completo'];
    $e_mail = $_POST['e_mail'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //Password encryption
    $contrasena = hash('sha512', $contrasena);


    //Create the Query for save the data in MySQL

    $query = "INSERT INTO usuarios(nombre_completo, e_mail, usuario, contrasena) VALUES('$nombre_completo','$e_mail','$usuario','$contrasena')";


    //Mail authenticity checker

    if(filter_var($e_mail, FILTER_VALIDATE_EMAIL)){
    }
    else{
        echo '
            <script>
                alert("This email is not exist!");
                window.location="../login.php";
            </script>
        ';  
        exit();
        mysqli_close($connection);
    }


    //Data non-redundancy checker EMAIL

    $checker = mysqli_query($connection, "SELECT * FROM usuarios WHERE e_mail='$e_mail'");

    if(mysqli_num_rows($checker)>0){
        echo '
            <script>
                alert("This email is already registered!");
                window.location="../login.php";
            </script>
        ';
        exit();
        mysqli_close($connection);
    }

        //Data non-redundancy checker USER

        $checkeruser = mysqli_query($connection, "SELECT * FROM usuarios WHERE usuario='$usuario'");

        if(mysqli_num_rows($checkeruser)>0){
            echo '
                <script>
                    alert("This user is already registered!");
                    window.location="../login.php";
                </script>
            ';
            exit();
            mysqli_close($connection);
        }

    //Start the Query

    $start = mysqli_query($connection, $query);
    

    //Guard conditional for redirect user to the main landingpage

    if($start){
        echo '
            <script>
                window.location ="../index.html";
            </script>
        ';
    }
    else{
        echo 
            '<script> 
                window.location ="../index.html"; 
            </script>
        ';
    }

    //Close connection with MySQL

    mysqli_close($connection);

?>