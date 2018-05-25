<?php

//database connection

$dbase_connection = mysqli_connect("localhost", "phpmyadmin", "admin", "guestbook");

if (!$dbase_connection) {
    die("Failed to connect" . mysqli_connect_error($dbase_connection));
} 



