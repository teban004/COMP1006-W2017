<?php

    $gameID = $_GET["gameID"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Details</title>
    <!-- CSS Section -->

    <!-- <link rel="stylesheet" href="./Scripts/lib/bootstrap/dist/css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <!-- <link rel="stylesheet" href="./Scripts/lib/font-awesome/css/fontawesome.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="./Content/app.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h1>Game Details</h1>

                <?php
                    require_once('database.php');

                    $query = "SELECT * FROM Games";
                    $statement = $db->prepare($query);
                    $statement->execute(); // run on the db server
                    $games = $statement->fetchAll(); // returns an array for each row

                ?>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="IDTextField">Game ID</label>
                        <input type="text" class="form-control" id="IDTextField" placeholder="Game ID">
                    </div>
                    <div class="form-group">
                        <label for="NameTextField">Game Name</label>
                        <input type="text" class="form-control" id="NameTextField" placeholder="Game Name" required>
                    </div>
                    <div class="form-group">
                        <label for="CostTextField">Game Cost</label>
                        <input type="text" class="form-control" id="CostTextField" placeholder="Game Cost" required>
                    </div>
                    <button type="submit" id="UpdateButton" class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
        
    </div>

    <!-- JavaScript Section-->
    
    <!-- <script src="./Scripts/lib/jquery/dist/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script src="./Scripts/lib/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="./Scripts/app.js"></script>
</body>
</html>