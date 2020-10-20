<?php
include_once 'database.php';
    
$year = $_GET['year'];
$month = $_GET['month'];
$earnings = $_GET['earnings'];

$sql = "UPDATE earnings
SET Earnings = $earnings
WHERE Year= $year AND Month= '$month' ;";

$retval = mysqli_query($conn, $sql);

if(! $retval ) {
      die('Could not update data: ' . mysqli_error($conn));
   }
   
echo "<center><h1>Data Updated Successfully</h1></center><br>";
echo '<center><a href="tables.php"><<< Back to table</a></center>';

   //header("Location = tables.php?mysql=done");
?>