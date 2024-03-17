<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hireme_year2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$country = $_POST['country'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Insert data into database
$sql = "INSERT INTO clients (first_name, last_name, day, month, year, phone, address, address2, city, country, email, username, password) VALUES ('$first_name', '$last_name', '$day', '$month', '$year', '$phone', '$address', '$address2', '$city', '$country', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>