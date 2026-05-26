<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = trim(preg_replace('/\s+/', ' ', $_POST['nombre']));
    $email = $_POST['email'];
    $contrasena = trim($_POST['contrasena']);
    $usuario = $_POST['usuario'];
    
    //Validar contraseña//
    if (strlen($contrasena) < 10 ||
        !preg_match('/[a-z]/', $contrasena) ||
        !preg_match('/[A-Z]/', $contrasena) ||
        !preg_match('/[0-9]/', $contrasena)) {

        echo ' 
        <script>
        alert("La contraseña debe tener mínimo 10 caracteres, mayúscula, minúscula y número")
        window.location = "../registro.php";
        </script>
        ';
        exit();
    }

//Validar formato de email primero//
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ' 
    <script>
    alert("Ingrese un correo electrónico válido");
    window.location = "../registro.php";
    </script>
    ';
    exit();
}

//Obtener dominio//
$dominio = substr(strrchr($email, "@"), 1);

//Validar dominio//
if (!empty($dominio) && !checkdnsrr($dominio, "MX")) {
    echo ' 
    <script>
    alert("El dominio del correo no es válido");
    window.location = "../registro.php";
    </script>
    ';
    exit();
}
//Mantener que solo tenga letras y espacios//
if (!preg_match('/^[\p{L}]+(\s[\p{L}]+)*$/u', $nombre)) {
    echo "
    <script>
        alert('El nombre solo puede contener letras y un solo espacio entre nombres');
        window.location.href = '../registro.php';
    </script>";
    exit();
}
    //verificar que el usuario no se repita//
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario ='$usuario'");
    if (mysqli_num_rows($verificar_usuario) > 0){
        echo ' 
         <script>
         alert("Este usuario ya esta en uso, Pruebe con otro.")
         window.location = "../registro.php";
         </script>
        ';
        exit();
    }
    //Verificacion de correo//
    $dominio = substr(strrchr($email, "@"), 1);

if (!checkdnsrr($dominio, "MX")) {
    echo ' 
    <script>
    alert("El correo no existe o el dominio no es válido");
    window.location = "../registro.php";
    </script>
    ';
    exit();
}

    //verificar que el correo no se repita//
    $verificar_email = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email ='$email'");
    if (mysqli_num_rows($verificar_email) > 0){
        echo ' 
         <script>
         alert("Este correo ya esta en uso, pruebe con otro.")
         window.location = "../registro.php";
         </script>
        ';
        exit();
    }

    //Encriptar contraseña//
    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    //Insertar//
    $query = "INSERT INTO usuarios(nombre,usuario,contrasena,email) 
              VALUES('$nombre','$usuario','$contrasena','$email')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
       echo "<script>
            alert('Usuario registrado exitosamente');
            window.location = '../registro.php';
        </script>";
    }else{
        echo "<script>
            alert('Error Intentalo nuevamente');
            window.location = '../registro.php';
        </script>";
    }
}

mysqli_close($conexion);
?>