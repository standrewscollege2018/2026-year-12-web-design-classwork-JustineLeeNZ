<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Games in selected genre</H1>


    <!-- connect to database -->
    <?php include("db_connect.php"); 

    // get info from GET array
    $genre = $_GET['genre_id'];

    // make and run query
    $game_sql = "SELECT * FROM game WHERE genre_id=" . $genre;
    $game_qry = mysqli_query($db_connect, $game_sql);
    $game_aa = mysqli_fetch_assoc($game_qry);



    // display results
    do {
        echo "<p><em>Name:</em> " . $game_aa['game_name'] . "  <em>Released:</em> " . $game_aa['release_year'];


        } while ($game_aa = mysqli_fetch_assoc($game_qry))


   ?> 

</body>
</html>