<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request");
}

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$department = trim($_POST['department']);
$phone = trim($_POST['phone']);

if (empty($name) || empty($email) || empty($department) || empty($phone)) {
    die("All fields are required");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

$stmt = $conn->prepare(
    "INSERT INTO employees (name, email, department, phone)
     VALUES (?, ?, ?, ?)"
);

$stmt->bind_param("ssss", $name, $email, $department, $phone);

if ($stmt->execute()) {
    echo "Employee Registered Successfully!";
} else {
    echo "Registration Failed";
}

$stmt->close();
$conn->close();
?>
