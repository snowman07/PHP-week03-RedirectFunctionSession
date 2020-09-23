
<?php
    //this file will be stored in a non-web folder for added security
    //this file can be found on /data on filezilla

    $username_good = "phil";
    $password = "web123";
    $pw_enc = password_hash($password, PASSWORD_DEFAULT);

?>