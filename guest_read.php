<?php

//reading data from the database
require 'db.php';
$display_query = "SELECT * FROM guestbook_table";
 $result_query = mysqli_query($dbase_connection, $display_query);

 if (!$result_query) {
     echo ("query failed " . mysqli_error($dbase_connection));
 }