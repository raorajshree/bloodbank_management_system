<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Requester Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, Requester</h2>
        <p>Search for donors by blood group:</p>
        <form method="GET" class="row g-3">
            <div class="col-auto">
                <input type="text" name="blood_group" placeholder="e.g. A+" class="form-control" required>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary">Search</button>
            </div>
        </form>
        <hr>
        <?php
        if (isset($_GET['blood_group'])) {
            $bg = $_GET['blood_group'];
            $res = $conn->query("SELECT name, email, location FROM users WHERE blood_group='$bg' AND type='donor'");
            if ($res->num_rows > 0) {
                echo "<table class='table'><thead><tr><th>Name</th><th>Email</th><th>Location</th></tr></thead><tbody>";
                $to = "admin@yourdomain.com"; // Replace with actual recipient
$subject = "Blood Request Notification - Group $bg";
$message = "Someone is searching for blood group $bg.";
$headers = "From: bloodvalve@yourdomain.com";
mail($to, $subject, $message, $headers);

while ($row = $res->fetch_assoc()) {
                    echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['location']}</td></tr>";
                }
                echo '</tbody></table>';
            } else {
                echo '<p>No donors found for this blood group.</p>';
            }
        }
        ?>
    </div>
</body>
</html>