<?php
include_once('database.php;');

$gameID = $_POST['IDTextField'];
$gameName = $_POST['NameTextField'];
$gameCost = $_POST['CostTextField'];

$query = "UPDATE Games SET Name = :game_name, Cost = :game_cost WHERE Id = :game_id";
$statement = $db->prepare($query);
$statement->bindValue(':game_id', $gameID);
$statement->bindValue(':game_name', $gameName);
$statement->bindValue(':game_cost', $gameCost);
$statement->execute(); // run on the db server
$game = $statement->fetch(); // returns an array for each row
$statement->closeCursor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update database</title>
</head>
<body>

<?php
 echo "<p>Values:</p>" . $gameID . " " . $gameName . " " . $gameCost;
?>
    
</body>
</html>