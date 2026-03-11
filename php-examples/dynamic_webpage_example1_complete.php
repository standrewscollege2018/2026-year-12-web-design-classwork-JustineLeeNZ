<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dynamic webpage</title>
</head>
<body>
    <h1>Run simple query on game library database</h1>

    <?php

    // connect to database
    $db_connect = mysqli_connect("localhost", "root", "root", "game_library"); 
?>

 <h2>Display a single record</h2>

 <?php
    //   construct and run query

    // query will return only ONE record i.e. Hollow Knight
    $game_sql = "SELECT * FROM game WHERE game_id=2";
    $game_qry = mysqli_query($db_connect, $game_sql);
    $game_aa = mysqli_fetch_assoc($game_qry);


    // display query results

    // echo $game_aa['game_name'];

    echo "<p><em>Name:</em> " . $game_aa['game_name'] . "  <em>Released:</em> " . $game_aa['release_year'] . "</p>" ;




    ?>

   
   
     

    <h2>display more than one record</h2>


    <?php

    // query will return all the records that match the query i.e. Tetris, Portal 2
        $genre_sql = "SELECT * FROM game WHERE genre_id=2";
        $genre_qry = mysqli_query($db_connect, $genre_sql);
        $genre_aa = mysqli_fetch_assoc($genre_qry);


    // display query results

        do {
        echo "<p><em>Name:</em> " . $genre_aa['game_name'] . "  <em>Released:</em> " . $genre_aa['release_year'] . "</p>";


        } while ($genre_aa = mysqli_fetch_assoc($genre_qry))


    ?>

 


</body>
</html>