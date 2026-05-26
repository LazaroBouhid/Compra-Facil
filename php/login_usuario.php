<?php

session_start();

include 'connection.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Buscar usuario SOLO por email
$query = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = mysqli_query($conexion, $query);

if(mysqli_num_rows($resultado) > 0){

    $usuario = mysqli_fetch_assoc($resultado);

    // Verificar contraseña con hash
    if(password_verify($contrasena, $usuario['contrasena'])){

        $_SESSION['usuario'] = $usuario['usuario'];
        $_SESSION['nombre'] = $usuario['nombre'];

        header("location: ../index.php");
        exit;

    } else {
        echo '
        <script>
            alert("Contraseña incorrecta");
            window.location = "../Registro.php";
        </script>
        ';
        exit;
    }

}else{
    echo '
    <script>
        alert("Usuario no existe");
        window.location = "../Registro.php";
    </script>
    ';
    exit;
}