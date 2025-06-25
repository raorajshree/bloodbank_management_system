<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, Donor</h2>
        <p>Thank you for your willingness to donate blood.</p>
        <h4>Your Info</h4>
        <table class="table table-bordered">
            <?php
            $email = $_SESSION['user'];
            $res = $conn->query("SELECT * FROM users WHERE email='$email'");
            $row = $res->fetch_assoc();
            foreach ($row as $key => $value) {
                echo "<tr><th>$key</th><td>$value</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>