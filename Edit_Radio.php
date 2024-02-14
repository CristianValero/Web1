<?php include('Conexion.php');

if (isset($_GET['id_Radio'])) {
   $id_Radio = $_GET['id_Radio'];
   $query = "SELECT * FROM Radio WHERE id_Radio = id_Radio";
   $result = mysqli_query($conn, $query);
   if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $Modelo = $row['Modelo'];
      $Serial = $row['Serial'];
      $Placa = $row['Placa'];
      $Antena = $row['Antena'];
      $Cli = $row['Cli'];
      $Bateria = $row['Bateria'];
      $Cargador = $row['Cargador'];
      echo $Modelo $Serial $Placa $Antena $Cli $Bateria $Cargador
   }
}

?>