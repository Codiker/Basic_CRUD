<?php
$id = $_GET['id'];
include('model/conection.php');
$slq = $conn->query("SELECT * FROM users WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e47d5c0f6f.js" crossorigin="anonymous"></script>
    <title>Modificar Datos</title>
</head>

<body>
    <!-- Modificacion temporal de los datos -->
    <div class="container-fluid row ">
        <form class="col-4 p-5 m-auto" method="POST">
            <h3 class="text-center text-secondary">Edicion de registros de usuarios</h3>
            <input type="hidden" class="form-control" name="id" value=" <?=$_GET["id"]?>">
            <?php
            include('Controller/actualizarDatos.php');

            while ($data = $slq->fetch_object()) { ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" value=" <?=$data->nombre?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="lastname" value="<?=$data->apellido?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="age" value="<?=$data->FechaNacimiento?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="email" value="<?=$data->correo?>">
                </div>

            <?php }

            ?>
            <button type="submit" class="btn btn-primary" name="submit" value="ok">registrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>