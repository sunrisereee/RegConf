<?php

    $d = mysqli_connect('localhost', 'root', '','conference');
    if(!$d){
        die (mysqli_connect_error());
    }
?>