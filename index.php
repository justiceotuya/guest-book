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
        <form class="row card z-depth-5" action="display_guest.php" method="post">
            <div class="col-sm-12">
                <div class="row">
                <!-- date -->
                <div class="col-sm-4">
                    <p>
                        <label>
                            <input type="date" name="date" class="datepicker" required><span>Date
                        </label>
                    </p>
                </div>

               

                <!-- name -->
                <div class="col-sm-6">
                    <p>
                        <label>
                            <input type="text" name="name" id="name"  maxlength="50" required> <span>Name
                        </label>
                    </p>
                </div>

                <!-- sex -->
                <div class="browser-default col-sm-2 black-text">
                        <label>
                            <select name="sex" id="sex" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                            Sex
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
                        <div class="col-sm-6">
                            <input  class="btn green hoverable" type="submit" name="submit" value="Submit Comments">
                        </div>
                        
                        <div class="col-sm-6">
                            <a class="btn blue hoverable" href="./display_guest.php" role="button">View Comments</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="./js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.js"></script>
</body>

</html>