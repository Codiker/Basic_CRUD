<?php
include('model/conection.php');

if (!empty($_POST["submit"])) {
    if (!empty($_POST["name"]) && !empty($_POST["lastname"]) && !empty($_POST["age"]) && !empty($_POST["email"])){
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $email = $_POST['email'];

        $sql = $conn->query("UPDATE users SET nombre='$name', apellido='$lastname', FechaNacimiento = '$age', correo= '$email' WHERE id=$id " );
        if ($sql==1){
            header('location:index.php');
        } echo "<div class='alert alert-danger'><font color='red'>Ha ocurrido un error inesperado</font> </div>";
    } else {
        echo "<div class='alert alert-warning'><font color='orange'>Campos vacios</font> </div>";
    }
}

?>