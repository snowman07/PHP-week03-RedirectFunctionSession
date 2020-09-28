<?php
  include("includes/header.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style type="text/css">
      .new-entry {
          border: 3px solid #999;
          margin-top: 20px;
          margin-bottom: 20px;
          background-color: yellow;
      }
      .title {
          font-weight: bold;
          text-transform: uppercase;
      }
      .timedate {
          font-style: italic;
      }
      .entry {
        padding-top: 25px;
      }
      .border {
        margin: 20px 250px 10px 250px
      }
      .container {
        padding: 30px;
      }
      h2 {
        text-align: center;
        margin-top: 60px;
        color: blue;
      }
    </style>

    <title>Simple Blog</title>
  </head>
  <body>
    <h2>HOME</h2>
    <div class="border border-primary rounded"> 
      <div class="container">
        <div><a href="admin/login.php">Insert New Entry</a></div>
        <?php
          include("admin/blogfile.txt");
        ?>
      </div>
    </div>

    <?php
      include("includes/footer.php");
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>