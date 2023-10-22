<?php
$UserName = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Number = $_POST['number'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(UserName, Email, Password, Number) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $UserName, $Email, $Password, $Number);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Registration was successful, so redirect to a new page
        header("Location: todoList.php");
        exit; // Make sure to exit to prevent further execution
    } else {
        // Handle the case where registration is not successful
        echo "Registration Failed...";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>
