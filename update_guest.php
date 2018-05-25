<?php
 require 'db.php';
  include 'guest_read.php';
  
//   update the table
$id = $_GET['id'];
  if(isset($_POST['update'])){
    $date = $_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sex = $_POST['sex'];
    $comment = $_POST['comment'];
    $id = $_POST['id'];
    
    
     $data_update = "UPDATE `guestbook_table` SET  `name` = '$name', `email` = '$email', `sex` = '$sex', `address` = '$address', `comment` = '$comment', `date` = '$date' WHERE `guestbook_table`.`id` = $id";
        
    $query_update = mysqli_query($dbase_connection, $data_update);
    
    
     if(!$query_update) {
         echo "error $id ". mysqli_error($dbase_connection);
     }

  }

//display updated table

?>


    <!DOCTYPE html>
    <html lang="en">

    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/index.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">

    <title>GuestBook</title>
</head>

    <body>
        <div class="container">
            <form class="row card z-depth-5" action="update_guest.php" method="post">
                <div class="col-sm-12">
                    <div class="row">

                        <!-- date -->
                        <div class="col-sm-4">
                            <p>
                                <label>
                                    <input type="date" name="date" class="datepicker" required>
                                    <span>Date
                                </label>
                            </p>
                        </div>



                        <!-- name -->
                        <div class="col-sm-6">
                            <p>
                                <label>
                                    <input type="text" name="name" id="name" maxlength="50" required>
                                    <span>Name
                                </label>
                                <input type="hidden" name="id" value="<?php echo $id?>">
                            </p>
                        </div>

                        <!-- sex -->
                        <div class="browser-default col-sm-2 black-text">
                            <label> Sex
                                <select name="sex" id="sex" required style="display: block">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>

                            </label>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12">
                    <div class="row">
                        <!-- email -->
                        <div class="col-sm-6">
                            <p>
                                <label>
                                    <input type="email" name="email" id="email" maxlength="30" required> Email Address</span>
                                </label>
                            </p>
                        </div>

                        <!-- address -->
                        <div class="col-sm-6">
                            <label>
                                <textarea id="textarea" class="materialize-textarea" name="address" maxlength="200"></textarea>
                                Address
                            </label>
                        </div>
                    </div>
                </div>



                <!-- comment -->
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <textarea id="textarea" class="materialize-textarea" name="comment" maxlength="225"></textarea>
                                <label for="textarea">comments</label>

                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <input class="col-sm-6 btn blue hoverable btn blue" type="submit" name="update" value="Update Comments">

                            <div class="col-sm-3"></div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>

















    <?php 
  $display_query = "SELECT * FROM guestbook_table";
  $result_query = mysqli_query($dbase_connection, $display_query);
 
  if (!$result_query) {
     die ("query failed " . mysqli_error($dbase_connection));
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
                        <div class="col-sm-4">
                            <a class="btn cyan hoverable" name="update" href="update_guest.php?id=<?php echo $id; ?> ">Update</a>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn blue hoverable" href="./display_guest.php" role="button">View Comments</a>
                        </div>

                        <div class="col-sm-4">
                            <a class="btn red hoverable" name="delete" href="delete_guest.php?id=<?php echo $id; ?> ">delete</a>

                        </div>
                    </div>
                </div>
            </div>





        </form>








    </div>




    </html>
    <?php
  }
?>