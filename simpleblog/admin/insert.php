
<!-- this is a secured page -->
<?php
    session_start();

    //echo session_id();

    //if(!isset($_SESSION['aasdffrtgfb'])) {        //<-- from here     isset means something is set
    if(isset($_SESSION['aasdffrtgfbqw'])) {                //<-- to here
        //header("Location: login.php");
        //echo "Logged in";
    } else {
        //echo "NOT logged in";
        header("Location: login.php");
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
    <title>New Blog Entry</title>

    <!--reducing the width of the form on desktop-->
    <style type="text/css">
      form {
        max-width: 450px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>New Blog Entry</h1>


      <?php
        // retrieve the form data
        if(isset($_POST['mysubmit'])) { //has the user pressed the button

          $title = trim($_POST['title']);
          $entry = trim($_POST['entry']);
          $today = date("F j, Y, g:i a"); //grabbed from PHP manual
          $handle = fopen("blogfile.txt", "r"); // flatfile

          // WRITE TO BLOG
          if(($handle) && ($title != "") && ($entry != "")) {

            while(!feof($handle)) {
              $buffer = fgets($handle, 4096); // this is a single line from the text file
              $existingText .= $buffer; //append the variable; this then is ALL lines from the text file

            } // end loop

            //echo $existingText;
            fclose($handle);
          

            // previous blog entries are now in $existingText

            // Lets create a new var from the new blog entry
            
            //$newEntry = $title . "\<br\>" . $entry . "\<br\>"; ////the result of this is in blogfile.txt  // think this is the reason why it is showing the break

            $newEntry = "\n<div class=\"new-entry\">";
            $newEntry .= "\n\t<div class=\"title\">$title</div>";
            $newEntry .= "\n\t<div class=\"timedate\">$today</div>";
            $newEntry .= "\n\t<div class=\"entry\">$entry</div>";


            $newEntry .= "\n</div>";

            $allEntries = $newEntry . $existingText; // this will show all blogs

            //write to the blogfile
            $handle = fopen("blogfile.txt", "w");   //use to be blogfile.txt
            fwrite($handle, $allEntries);
            fclose($handle);  
            // END WRITE TO BLOG

            $msg = "New blog entry added!!"; // echo of $msg is found below

          } else {
              $msg = "Please fill out the form"; // echo of $msg is found below
          }
        }
      
      ?>

      <div><a href="../index.php">Homepage</a></div>

      <form name="myform" method="post" action="insert.php">
        <div class="form-group">
          <label for="title">Title</label>
          <input
            type="text"
            class="form-control"
            name="title"
            placeholder="Enter title here"
          />
        </div>
        
        
        <div class="form-group">
          <label for="entry">Entry</label>
          </br>
          <textarea name="entry" class="form-control"></textarea>
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
    <!-- <script
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
    ></script> -->
  </body>
</html>
