<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of a form & using POST</title>
</head>
<body>
    <!-- HTML form tag creates section of page where input can be entered -->
    <form action="hello.php" method="post">
        <!-- action attribute - points to page that is loaded when submit button is pressed
            method attribute - says to store info in POST array when submit button is pressed.
            Note that method isn't automatically added when using autocomplete in VS Code
        -->

        <!-- HTML to create text input field 
            attribute first_name is the name of the "variable" that get stored in the POST array,
            along with the corresponding text that the user entered
            Note that there is no closing tag.
         
        -->
        <input type="text" name="first_name">

        <!-- HTML to create submit button -->
        <button type="submit">GO!</button>


    </form>


    
</body>
</html>