<?php

    $conn = mysqli_connect('localhost', 'yicong', '7627', 'badminton');

    if(!$conn){
        echo 'Connection: ' . mysqli_connect_error();
    }

?>