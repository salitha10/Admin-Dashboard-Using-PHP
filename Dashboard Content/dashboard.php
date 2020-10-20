<?php
    include_once 'database.php';
?>

<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<meta name="author" content="Salitha">
	<meta name="description" content="Dashboard content">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="dashboardstyle.css" type="text/css">
    
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Copse' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Delius Unicase' rel='stylesheet'>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
</head>

<body>
    
    
    
    <div class="top-cards">
        
    <div class="cards c1">
        <p>EARNINGS (MONTHLY)</p>
        <h2 id="value">Rs.2500000
        </h2>
        <span><i class="fas fa-coins fa-2x"></i></span>
    </div>
        
    <div class="cards c2">
        <p>EARNINGS (ANNUAL)</p>
        <h2 id="value">Rs.8500000</h2>
        <span><i class="fas fa-dollar-sign fa-2x"></i></span>
    </div>
        
        
    <div class="cards c3">
        <p>PENDING REQUESTS</p>
        <h2 id="value">5</h2>
        <span><i class="fas fa-comments fa-2x"></i></span>
    </div>
    
    </div>
    
<div class="layer2">
    <!-- line chart -->
    <div class="large-cards lc1">
        <div class="title">
            Insurance
        </div>
        <div class="content" id="piechart1">
        </div>
    </div>
        <!-- pie chart -->
        <div class="large-cards lc2">
        <div class="title">
            Expenses
        </div>
        <div class="content" id="piechart2">
        </div>
    
    </div>
    </div>
    

<!-- Goole charts below are for visualization purpose only,
    Since generating charts using a database requires other languages like json and jquery,
    below codes are direclt copied from w3schools -->
    
 <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Health', 'Hours per Day'],
  ['Health', 8],
  ['Life', 2],
  ['Edu', 2],
  ['Retire', 2],
  ['Property', 2],
  ['House', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':550, 'height':350};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
  chart.draw(data, options);
}  
</script>
    
 <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Health', 'Hours per Day'],
  ['Salary', 8],
  ['Claim', 9],
  ['Tax', 4],
  ['Bills', 2],
  ['Other', 1],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'width':350, 'height':250};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data, options);
}  
</script>
    
    
</body>

</html>