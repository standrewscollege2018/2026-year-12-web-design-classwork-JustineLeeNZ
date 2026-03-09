<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uses POST</title>
</head>
<body>

<h1>Testing POST array</h1>

    <?php
        // retrieve name from POST array
        $display_name = $_POST['first_name'];

        // display name
        echo $display_name;

    ?>

    
</body>
</html>