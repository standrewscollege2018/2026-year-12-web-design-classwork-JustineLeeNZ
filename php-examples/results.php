<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search results</title>
</head>
<body>
    <H1>Games found that match query</H1>


    <!-- connect to database -->
    <?php include("db_connect.php"); 

    // get info from POST array - what the user wants to search for
    $search = $_POST['search_text'];

    // debug - check value from POST array
    echo "<p>Debugging starts.....</p>\n";
    echo "<p>Search text: " . $search . "</p>\n";

    // make and run query
    // note use of value from POST array in query
    $search_sql = "SELECT * FROM game WHERE game_name LIKE '%" . $search . "%'";
    
    // debug - check final version of SELECT query
    echo "<p>" . $search_sql . "</p>\n";
    echo "<p>Debugging ends.....</p>\n<p></p>\n";

    // run query and get first matching record
    $search_qry = mysqli_query($db_connect, $search_sql);
    $search_aa = mysqli_fetch_assoc($search_qry);



    // display ALL matching records
    do {
        echo "<p><em>Name:</em> " . $search_aa['game_name'] . "  <em>Released:</em> " . $search_aa['release_year'] . "</p>\n";


        } while ($search_aa = mysqli_fetch_assoc($search_qry))


   ?> 

</body>
</html>