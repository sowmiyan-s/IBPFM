<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>I B P F M</title>
    <link rel="stylesheet" href="./css/view-reports.css">
    <style>
      
    </style>
</head>
<body>


<header>
        
        <img id="logo" src="./img/logo.png" alt="">
        <marquee id="head-marquee" behavior="" direction="">Intilligence Based Pollution Free Mission</marquee>
        <a href="https://github.com/Bot-With-DOT" id="head-button">Bot With Dot</a>
    </header>
    <nav>
        <a href="./Index.html"><strong>HOME</strong></a>
        <a href="./report.html"><strong>REPORT</strong></a>
        <a href="./learn.html"><strong>LEARN</strong></a>
        <a href="./aboutus.html"><strong>ABOUT US</strong></a>
    </nav>

    <h1>All Reports</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "reports_db"; 


    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM reports";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th><th>Address</th><th>Description</th><th>Actiom</th</tr>";
        
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td  > <a id='mailid' href='mailto:". $row["email"] . "'>". $row["email"] .  " </a></td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td > <button id='emailbut' > <a id='mail' href='mailto:". $row["email"] . "'> Mail </a></button></td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No records found.";
    }

    
    $conn->close();
    ?>


</body>
</html>
