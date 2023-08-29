<?php

if (isset($_POST)) {
    require('connect.php');

    //Retrive data from form
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login_details VALUES ('$email', '$password', current_timestamp() );";

    //echo $sql;

    if ($conn->query($sql)) {
        header("Location: index.html");
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();

}
?>