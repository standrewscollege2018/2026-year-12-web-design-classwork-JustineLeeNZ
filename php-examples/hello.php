<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uses POST</title>
</head>
<body>

<h1>Testing POST array</h1>

    <!-- PHP code that gets text entered into form in previous webpage and does something with it -->
    <?php
        // retrieve first name from POST array (i.e. what user typed into text box in previous page)
        $display_name = $_POST['first_name'];

        // display first name in HTML page
        echo $display_name;

    ?>

    
</body>
</html>