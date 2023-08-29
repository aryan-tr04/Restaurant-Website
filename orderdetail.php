<?php

if (isset($_POST)) {
    require('connect.php');

    //Retrive data from form
    $name = $_POST['name'];
    $number = $_POST['number'];
    $orders = $_POST['orders'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $sql = "INSERT INTO order_details VALUES ('$name', '$number', '$orders', '$quantity', '$address', '$message', current_timestamp() );";

    //echo $sql;

    if ($conn->query($sql)) {
        //echo "Order Placed Successfully";
        header("Location: popup.html");
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();

}
?>