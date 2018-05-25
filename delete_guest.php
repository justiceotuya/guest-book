<?php
require 'db.php';


//statement for deleting data from the database
   echo $id = $_GET['id'];

    $data_delete = "DELETE FROM guestbook_table WHERE id='$id' ";
    $result = mysqli_query($dbase_connection, $data_delete);

    if(!$result){
        die("Connection failed ". mysqli_error($connection));
    }else{
        header('Location:display_guest.php');
    
    }
    
    

