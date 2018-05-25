
<?php
 require 'db.php';
 include 'add_guest.php';


  //displaying data from the database
 $display_query = "SELECT * FROM guestbook_table";
 $result_query = mysqli_query($dbase_connection, $display_query);

 if (!$result_query) {
     echo ("query failed " . mysqli_error($dbase_connection));
 }

   
while($row = mysqli_fetch_assoc($result_query)){
    
    $date = $row['date'];
    $name = $row['name'];
    $email = $row['email'];
    $address = $row['address'];
    $sex = $row['sex'];
    $comment = $row['comment'];
    $id = $row['id'];

    ?>

   

    <div class="container display_card">
        <form class="display card z-depth-5 hoverable" action="update_guest.php" method="post">
            <div class="col-sm-12">
                <div class="row">

                    <div class="col-sm-4 card hoverable">
                        <b>Date Written</b>
                        <?php echo "<p class='writing'>$date</p>"?>
                    </div>

                    <div class="col-sm-8 card hoverable">
                        <b>Name</b>
                        <?php echo "<p class='writing'>$name</p>"?>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-4 card hoverable">
                        <b>Sex</b>
                        <?php echo "<p class='writing'>$sex</p>"?>
                    </div>
                    <div class="col-sm-8 card hoverable">
                        <b>Email</b>
                        <?php echo "<p class='writing'>$email</p>"?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 card hoverable">
                        <b>Address</b>
                        <?php echo "<p class='writing'>$address</p>"?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 card hoverable z-depth-3">
                        <b>Comment</b>
                        <?php echo "<p class='writing'>$comment</p>"?>
                    </div>
                </div>

    

              <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                        <a class="btn cyan hoverable" name="update" href="update_guest.php?id=<?php echo $id; ?> ">Update</a>
                        </div>
                        
                        <div class="col-sm-6">
                     <a class="btn red hoverable" name="delete" href="delete_guest.php?id=<?php echo $id; ?> ">delete</a>
                        
                        </div>
                    </div>
                </div>
        </div>      
            
            
            
                
        
    </form>

</div>
<script src="./js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    
</body>
</html>

<?php
}
?>
        