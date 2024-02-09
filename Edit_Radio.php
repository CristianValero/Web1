<?
   include('Conexion.php');

   if(isset($_GET['id'])) {
      $id = $_GET['id'];
      $query = "SELECT * FROM Radios WHERE id = $id";
      $result = (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $Modelo = $row['Modelo'];
        $Serial = $row['Serial'];
        $Placa = $row['Placa'];
        $bateria = $row['Bateria'];
        $Cli = $row['Cli'];
        $Cargador = $row['Cargador'];
        
      }
   }


?>