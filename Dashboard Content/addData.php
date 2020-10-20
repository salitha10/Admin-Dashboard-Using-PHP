<?php
include_once 'database.php';
    
$year = $_GET['year'];
$month = $_GET['month'];
$earnings = $_GET['earnings'];

$sql = "INSERT INTO earnings (Year, Month, Earnings) VALUES
        ($year, '$month', $earnings);";

$retval = mysqli_query($conn, $sql);

if(! $retval ) {
      die('Could not enter data: ' . mysqli_error($conn));
   }
   
echo "<center><h1>Data Added Successfully</h1></center><br>";
echo '<center><a href="tables.php"><<< Back to table</a></center>';

   //header("Location = tables.php?mysql=done");
?>