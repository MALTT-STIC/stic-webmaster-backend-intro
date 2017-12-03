<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dynamic Front-end and Back-end page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Dynamic Front-end and Back-end page</h1>
    <p>This page cointains a PHP script that prints the current date in the next paragraph, and a JavaScript script that does the same in the following one.</p>
    <p><strong>PHP</strong>:
        <?php
        //This PHP script simply prints the current date in a given format
        echo date('r');
        ?>
    </p>
    <p id="dynamic"><strong>JavaScript</strong>: </p>
    <hr>
    <a href="./">Back to index</a>
    <script>
        //This JavaScript script simply prints the current date in a given format
        document.getElementById('dynamic').innerHTML += new Date();
    </script>
</body>

</html>