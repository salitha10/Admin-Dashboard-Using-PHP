<?php
include_once 'database.php';
    
$year = $_GET['year'];
$month = $_GET['month'];

$sql = "DELETE FROM `earnings` WHERE Year= $year AND month= '$month';";

$retval = mysqli_query($conn, $sql);

if(! $retval ) {
      die('Could not delete data: ' . mysqli_error($conn));
   }
   
echo "<center><h1>Data Deleted Successfully</h1></center><br>";
echo '<center><a href="tables.php"><<< Back to table</a></center>';

   //header("Location = tables.php?mysql=done");
?>