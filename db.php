<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$pass = $_POST['pass'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test'); 
if($conn->connect_error){
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (name, email, number, pass) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $email, $number, $pass);
    $stmt->execute();
    echo "Registration Successful.";
    $stmt->close();
    $conn->close();
}
?>

