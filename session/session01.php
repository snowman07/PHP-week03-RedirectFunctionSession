
 <?php

 /*
PHP Sessions

- a sessions is unique to each user.
- sessions can store data outside of a single page and share between pages 
- a session is removed:
    - when a user "destoys" the session
    - the user closes their browser.
- anytime we are using sessions, we MUST use session_start() (starts a new session OR continues an existing one.)
- starting a session must happen before any output to the browser

 */
    
    session_start();
    //echo session_id(); // for testing
    // session is unique to every user eg: vv4u0vb7kimt94mv5l4o25tse5

    $_SESSION['username'] = "Clarence";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Sample</title>
</head>
<body>

    <h1>This is page 1</h1>

    <a href="session02.php">Page 2</a>

    
</body>
</html>