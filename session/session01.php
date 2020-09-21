/*
PHP Sessions

- a sessions is unique to each user.
- sessions can store data outside of a single page and share between pages 
- a session is removed:
    - when a user "destoys" the session
    - the user closes their browser.
- anytime we are using sessions, we MUST use session_start() (starts a new session OR continues an existing one.)

 */

 <?php
    
    session_start();
    //echo session_id()

    $_SESSION['username'] = "Clarence";

 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>