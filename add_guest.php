<?php
   require 'db.php';
   require 'index.php';
   
//statement to create data in the database
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $comment = $_POST['comment'];


    $data_Insert = "INSERT INTO guestbook_table (date,name,email,address,sex,comment) VALUES ('$date','$name','$email','$address','$sex','$comment')";

    $result = mysqli_query($dbase_connection, $data_Insert);

     if (!$result) {
         die('Error' . mysqli_error($dbase_connection));
    } 
    


    }

