<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "phpmyadmin";
$password = "123";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Agregar usuario
if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    $sql = "INSERT INTO usuarios (name, email, phone, age) VALUES ('$name', '$email', '$phone', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo usuario agregado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Actualizar usuario
if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    $sql = "UPDATE usuarios SET name='$name', email='$email', phone='$phone', age='$age' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario actualizado con éxito.";
    } else {
        echo "Error al actualizar el usuario: " . $conn->error;
    }
}

// Eliminar usuario
if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado con éxito.";
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }
}

$conn->close();
?>
