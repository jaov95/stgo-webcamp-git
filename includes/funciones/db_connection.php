<?php 
    $conn = new mysqli('localhost:3307', 'root', '','gdlwebcamp');

    if ($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }

?>