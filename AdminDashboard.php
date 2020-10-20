<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Safeway Insurance Management System" />
    <meta name="author" content="Salitha" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Safeway Admin</title>

    <link rel="stylesheet" href="style.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Copse' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Delius Unicase' rel='stylesheet'>

</head>


<body>

    <input type="checkbox" id="check">
    <!--header-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>

        <div class="logo">
            <h3>SafeWay</h3>
        </div>

        <div class="right_area">
            <a href="#" class="logout_btn">Logout</a>
        </div>

    </header>

    <!--sidebar-->
    <div id="sidebar">

        <center>
            <img src="profile.jpg" class="profile_image" alt="Profile">
            <h4 class="profile-name">Admin</h4>
        </center>

        <div class="btn active" id="btn1"><i class="fas fa-desktop"></i><span>Dashboard</span></div>
        <div class="btn" id="btn2"><i class="fas fa-table"></i><span>Tables</span></div>
        <div class="btn" id="btn3"><i class="fas fa-file-word"></i><span>Reports</span></div>
        <div class="btn" id="btn4"><i class="fab fa-wpforms"></i><span>Forms</span></div>
        <div class="btn" id="btn5"><i class="fas fa-tools"></i><span>Settings</span></div>
        <div class="btn" id="btn6"><i class="fas fa-question-circle"></i><span>Help</span></div>

    </div>

    <div class="content" id="frame-content">
        <iframe id="frame" src="Dashboard Content/dashboard.php" width="95%" height="90%" style="float:right"></iframe>
    </div>

    <script>
        var btn1 = document.getElementById("btn1");
        //Change iframe on menu select
        btn1.addEventListener("click", function() {
            document.getElementById("frame-content").innerHTML = '<iframe id="frame" src="Dashboard Content/dashboard.php" width="95%" height="90%" style="float:right"></iframe>';
        });

        var btn2 = document.getElementById("btn2");
        btn2.addEventListener("click", function() {
            document.getElementById("frame-content").innerHTML = '<iframe id="frame" src="Dashboard Content/tables.php" width="95%" height="90%" style="float:right"></iframe>';
        });


        //Select current item
        var btns = document.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var active = document.getElementsByClassName("active");
                active[0].className = active[0].className.replace(" active", "");
                this.className += " active";
            });

        }

    </script>

</body>

</html>










<!---->
