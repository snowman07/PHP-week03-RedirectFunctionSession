<?php

// we MUST use this anytime we are working with sessions
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Sample</title>
</head>
<body>

    <h1>This is page 2</h1>

    <?php
    
    // MUST have session_start(); above this.
    echo $_SESSION['username'];

    ?>
    
</body>
</html>