<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login_user.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "login_register_db");
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recoger datos del formulario
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $cualidades = $_POST['cualidades'];
    $id_usuario = $_SESSION['id']; // Suponiendo que guardaste el ID en la sesión

    // Manejo de la imagen (si se sube una imagen)
    $imagen = $_FILES['imagen']['name'];
    $target_dir = "../access/img/";
    $target_file = $target_dir . basename($imagen);
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);

    // Insertar en la base de datos
    $sql = "INSERT INTO producto (n_producto, precio, descripcion, categoria, cualidades, id_usuario, imagen) VALUES ('$titulo', '$precio', '$descripcion', '$categoria', '$cualidades', '$id_usuario', '$target_file')";

    if ($conn->query($sql) === TRUE) {
        echo "Publicación creada con éxito.";
        header("Location: index.php"); // Redirigir después del insert
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>