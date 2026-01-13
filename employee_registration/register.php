<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "employee_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$phone = $_POST['phone'];

// Insert into database
$sql = "INSERT INTO employees (name, email, department, phone) VALUES ('$name', '$email', '$department', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Employee Registered Successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
