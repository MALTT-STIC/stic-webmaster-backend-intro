<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Back-end dynamic page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <h1>Back-end dynamic page</h1>
    <p>This page contains a PHP script that prints the current date in the next paragraph.</p>
    <p>
        <?php
        //This PHP script simply prints the current date in a given format
        echo date('r');
        ?>
    </p>
    <hr>
    <a href="./">Back to index</a>
    </body>
</html>