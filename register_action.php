<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $blood_group = $_POST['blood_group'];
    $location = $_POST['location'];
    $type = $_POST['type'];

    $sql = "INSERT INTO users (name, email, password, type, blood_group, location)
            VALUES ('$name', '$email', '$password', '$type', '$blood_group', '$location')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. <a href='login.php'>Login now</a>.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>