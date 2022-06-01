<?php
$con = mysqli_connect("localhost","root","","gestionhotelera");
  
// SQL query to display row count
// in building table

$sqlU = "SELECT * from registrou WHERE tipo_usuario = '2' ";
$sqls = "SELECT * from reserva_salon WHERE activo = 'si' ";
$sqlh = "SELECT * from reserva_habitacion WHERE activo = 'si' ";

if ($resultu = mysqli_query($con, $sqlU)) {

// Return the number of rows in result set
$rowcountu = mysqli_num_rows( $resultu );
  

}

if ($results = mysqli_query($con, $sqls)) {

// Return the number of rows in result set
$rowcounts = mysqli_num_rows( $results );
  
}

if ($resulth = mysqli_query($con, $sqlh)) {

    // Return the number of rows in result set
    $rowcounth = mysqli_num_rows( $resulth );
      
    }

    
mysqli_close($con);

?>


