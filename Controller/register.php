<?php 

if (!empty($_POST["submit"])) {
   if (!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['age']) && !empty($_POST['email'])) {
      
      $name=$_POST['name'];
      $lastname=$_POST['lastname'];
      $age=$_POST['age'];
      $email=$_POST['email'];

      $sql = $conn->query("INSERT INTO users (nombre, apellido, FechaNacimiento, correo) VALUES ('$name', '$lastname', '$age', '$email')");
      if ($sql==1) {
         echo "<div class='alert alert-success'>Usuario registrado</div>";
      } else {
         echo "<div class='alert alert-danger'><font color='red'>Error al registrar el usuario</font></d
         iv>";
      }
      
   }
   else {
      echo "<div class='alert alert-danger'><font color='red'>Todos los campos son obligatorios</font> </div>";
   }
}

?>