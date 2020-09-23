<?php
// On your own... creat a simple Bootstrap form for a usename and password and submit button.  DONE

// On your own ... please retrieve the data from the form and echo to test. DONE

    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo "$username, $password";

    // if "if" statement is present, critically test it
    if(isset($_POST['mysubmit'])) { // has the button been pushed

        //echo " submit"; //this is a test to show submit word when user click submit

        if(($username == "phil") && ($password =="web123")) {
            $msg = "Welcome";
        }



    } else {
        if ($username != "" && $password != "") {

        } else {
            $msg = "Please enter username and password";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>LOGIN</title>

    <!--reducing the width of the form on desktop-->
    <style type="text/css">
      form {
        max-width: 450px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>LOGIN</h1>
      <form name="myform" method="post" action="login.php">
        <div class="form-group">
          <label for="username">Name</label>
          <input
            type="text"
            class="form-control"
            name="username"
            placeholder="Enter username here"
          />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            class="form-control"
            name="password"
            placeholder="Enter password here"
          />
        </div>
    
        <button type="submit" name="mysubmit" class="btn btn-primary mb-2">
          Submit
        </button>


        <p>&nbsp;</p>
        <div>
            <?php
            
            if($msg) {
              echo "\n<div class=\"alert alert-primary\">$msg</div>";
            }
            
            ?>
        </div>

      </form>
    </div>
    <!--end of container class-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>