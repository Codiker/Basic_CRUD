<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e47d5c0f6f.js" crossorigin="anonymous"></script>

    <title>Panel Admin</title>
</head>
<body>
    <h1 class="text-center" p-3>Panel Admin</h1>
    <?php
            include('model/conection.php');
            include('Controller/deleteUser.php');
            ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Usuarios</h3>
            <?php include('Controller/register.php'); ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="age">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="email">
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="ok">registrar</button>
        </form>
        <div class="col-8 p-4">
            <h3 class="text-center text-secondary">Listado de Usuarios</h3>
            <table class="table">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider text-center">
                    <?php
                    include('model/conection.php');
                    $sql =$conn->query("SELECT * FROM users");
                    while ($data = $sql->fetch_object()) { ?>
                        <tr>
                            <th scope="row"><?=$data->id ?></th>
                            <td><?=$data->nombre ?></td>
                            <td><?=$data->apellido?></td>
                            <td><?=$data->FechaNacimiento?></td>
                            <td><?=$data->correo?></td>
                            <td>
                                <a href="Actualizar.php?id=<?=$data->id?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return confirm('¿Desea eliminar el usuario?')" href="index.php?id=<?=$data->id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>