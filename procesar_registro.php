<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ra3_main";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashear la contraseña para mayor seguridad

    // Insertar datos en la base de datos
    $sql = "INSERT INTO accounts (login, email, password) VALUES ('$nombre', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error en el registro: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
