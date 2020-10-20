<?php
    include_once 'database.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tables</title>
    <meta name="author" content="Salitha">
    <meta name="description" content="Tables">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="tablestyles.css" type="text/css">

</head>

<body>
    <div class="actions">
        <button type="button" onclick="openPopup()">Add Data</button>
        <button type="button" onclick="openDelete()">Delete</button>
        <button type="button" onclick="openUpdate()">Update</button>

    </div>

    <!-- pop up windows for update-->
    <div class="popup">
        <div class="form-popup" id="addForm" method="GET">
            <!-- form -->
            <form action="addData.php" class="form-container">
                <h2>Enter Data</h2>
                <label for="Year">
                    <strong>Year</strong>
                </label>
                <input type="number" placeholder="Year" name="year" required>

                <label for="Month">
                    <strong>Month</strong>
                </label>
                <input type="text" placeholder="Month" name="month" required>

                <label for="Earnings">
                    <strong>Earnings</strong>
                </label>
                <input type="number" placeholder="Earnings" name="earnings" required>

                <button type="submit" class="btn">Add Data</button>
                <button type="submit" class="cancel btn" onclick="closePopup()">Cancel</button>
            </form>

        </div>
    </div>

    <!-- Delete pop ip -->
    <div class="popup">
        <div class="form-popup" id="deleteForm" method="GET">
            <!-- form -->
            <form action="deleteData.php" class="form-container">
                <h2>Enter Data</h2>
                <label for="Year">
                    <strong>Year</strong>
                </label>
                <input type="number" placeholder="Year" name="year" required>

                <label for="Month">
                    <strong>Month</strong>
                </label>
                <input type="text" placeholder="Month" name="month" required>

                <button type="submit" class="btn">Delete Data</button>
                <button type="submit" class="cancel btn" onclick="closeDelete()">Cancel</button>
            </form>
        </div>
    </div>

    <!-- Update popup-->
    <div class="popup">
        <div class="form-popup" id="updateForm" method="GET">
            <!-- form -->
            <form action="updateData.php" class="form-container">
                <h2>Enter Data</h2>
                <label for="Year">
                    <strong>Year</strong>
                </label>
                <input type="number" placeholder="Year" name="year" required>

                <label for="Month">
                    <strong>Month</strong>
                </label>
                <input type="text" placeholder="Month" name="month" required>

                <label for="Earnings">
                    <strong>New Earnings</strong>
                </label>
                <input type="number" placeholder="New Earnings" name="earnings" required>

                <button type="submit" class="btn">Update Data</button>
                <button type="submit" class="cancel btn" onclick="closeUpdate()">Cancel</button>
            </form>
        </div>
    </div>


    <div class="tables">
        <table id="Earnings">
            <caption>Total Earnings</caption>
            <tr>
                <th>Year</th>
                <th>Month</th>
                <th>Earnings</th>
            </tr>

            <!-- Generate table -->
            <?php
        $sql = "SELECT Year, Month, Earnings FROM earnings";
        $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
         //Create table
            echo "<tr><td>" . $row["Year"] . "</td><td>" . $row["Month"] . "</td><td>" . $row["Earnings"] . "</td></tr>";
        }
        echo "</table>";
    }
        else{
            echo "0 results";
        }
        ?>
        </table>
    </div>


    <script>
        function openPopup() {
            document.getElementById("addForm").style.display = "block";
        }

        function closePopup() {
            document.getElementById("addForm").style.display = "none";
        }

        function openDelete() {
            document.getElementById("deleteForm").style.display = "block";
        }

        function closeDelete() {
            document.getElementById("deleteForm").style.display = "none";
        }


        function openUpdate() {
            document.getElementById("updateForm").style.display = "block";
        }


        function closeUpdate() {
            document.getElementById("updateForm").style.display = "none";
        }

    </script>

</body>

</html>
