<?php
    $con = mysqli_connect("localhost", "root", "LV426Johnny5M@rcus","userdata");
    if($con == false) {
        die("connection error". mysqli_connect_error())
    }
?>