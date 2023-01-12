<?php
    //connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'universitas');

    if(!$conn){
        die('Connection Failed: '.mysqli_connect_error());
    }

    //receive data from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //insert data into the database dan ke halamn login
    $sql = "INSERT INTO admin (username,password) VALUES ('$username','$password')";
    if(mysqli_query($conn, $sql)){
        header('Location: login.html');
    } else {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }

    mysqli_close($conn);
?>

