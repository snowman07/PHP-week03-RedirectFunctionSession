<?php

// we MUST use this anytime we are working with sessions
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    // MUST have session_start(); above this.
    echo $_SESSION['username'];

    ?>
    
</body>
</html>