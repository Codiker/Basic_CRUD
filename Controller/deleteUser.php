<?php
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = $conn->query("DELETE FROM users WHERE id=$id");
    if ($sql==1) {
        echo "<div class='alert alert-success m-auto text-center'>Usuario eliminado</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al eliminar usuario</div>";
    }
}

?>