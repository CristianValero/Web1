<?php 

include("Conexion.php");

if (isset($_GET['id'];)) {
    $id = $_GET['id'];
    $query = "DELETE FROM Radios WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("No existe");
    }

    $_SESSION['message'] = 'Eliminado Correctamente';
    $_SESSION['messsge_type'] = 'danger';
    header("Location: index.php");
}



?>