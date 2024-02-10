<?php 

include("Conexion.php");

  if (isset($_POST['Guardar'])) {
    $Modelo = $_POST['Modelo'];
    $Serial = $_POST['Serial'];
    $Placa = $_POST['Placa'];
    $bateria = $_POST['Bateria'];
    $Cli = $_POST['Cli'];
    $Cargador = $_POST['Cargador'];
    $Lugar = $_POST['Lugar'];

    $query = "INSERT INTO Radios(Modelo, Serial, Placa, Bateria, Cli, Cargador, Lugar) VALUES ('$Modelo' , '$Serial', '$Placa', '$Bateria', '$Cli', '$Cargador')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die("Consulta cancelada");
    }
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  
  header("Location: index.html");


?>