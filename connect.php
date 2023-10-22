<?php
$UserName = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Number = $_POST['number'];


// Database connection
$conn = new mysqli("sql300.infinityfree.com", "if0_35281050", "5hKuMJfqYe5f" , 'if0_35281050_test');
if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(UserName, Email, Password, Number) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $UserName, $Email, $Password, $Number);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: todoList.php");
        exit; 
    } else {
        echo "Registration Failed...";
    }

    $stmt->close();
    $conn->close();
}
?>