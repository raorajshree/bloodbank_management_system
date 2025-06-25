<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, Admin</h2>
        <h4>All Users</h4>
        <?php
        $res = $conn->query("SELECT id, name, email, type, blood_group FROM users");
        echo "<table class='table table-bordered'><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Type</th><th>Blood Group</th></tr></thead><tbody>";
        while ($row = $res->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['type']}</td><td>{$row['blood_group']}</td></tr>";
        }
        echo "</tbody></table>";
        ?>
    </div>
</body>
</html>