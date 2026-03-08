<?php require_once 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBPFM - View Reports</title>
    <link rel="stylesheet" href="../css/view-reports.css">
</head>
<body>

<header>
    <img id="logo" src="../img/logo.png" alt="IBPFM Logo">
    <marquee id="head-marquee" behavior="" direction="">Intelligence Based Pollution Free Mission</marquee>
    <a href="https://github.com/Bot-With-DOT" id="head-button">Bot With Dot</a>
</header>

<nav>
    <a href="../index.html"><strong>HOME</strong></a>
    <a href="../report.html"><strong>REPORT</strong></a>
    <a href="../learn.html"><strong>LEARN</strong></a>
    <a href="../aboutus.html"><strong>ABOUT US</strong></a>
</nav>

<main class="container">
    <h1>All Pollution Reports</h1>

    <?php
    $sql = "SELECT * FROM reports ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead><tr><th>Name</th><th>Email</th><th>Address</th><th>Description</th><th>Status</th><th>Action</th></tr></thead>";
        echo "<tbody>";
        
        while($row = $result->fetch_assoc()) {
            $statusClass = strtolower(str_replace(' ', '-', $row["status"]));
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td><a id='mailid' href='mailto:". htmlspecialchars($row["email"]) . "'>". htmlspecialchars($row["email"]) . "</a></td>";
            echo "<td>" . htmlspecialchars($row["address"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["description"]) . "</td>";
            echo "<td><span class='status-pill $statusClass'>" . $row["status"] . "</span></td>";
            echo "<td><button id='emailbut'><a id='mail' href='mailto:". htmlspecialchars($row["email"]) . "'>Mail</a></button></td>";
            echo "</tr>";
        }
        
        echo "</tbody></table>";
    } else {
        echo "<p class='no-records'>No reports found at this time.</p>";
    }

    $conn->close();
    ?>
</main>

<footer>
    <h3>I B P F M</h3>
    <p>&copy; 2024 Sparkathon24</p>
    <p>Project by Vishal, Sowmiyan, Sudarson, and Sathwik</p>
    <p>
        <a href="https://github.com/Bot-With-DOT/IBPFM" target="_blank">View on GitHub</a>
    </p>
</footer>

</body>
</html>
