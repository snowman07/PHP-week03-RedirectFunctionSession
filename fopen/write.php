<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>


    <?php
    /*fopen is a way of opening a flatfile (any text file) and writing to it or reading from it
    
    3 ways to open it:
    - w = write
    - a = append
    - r = read
    
    */

    $handle = fopen("datafile.txt", "w"); // open the file for writing // this is a "resource" object but it looks variable in php
    fwrite($handle, "New text string here"); //$handle is a "resource" object
    fclose($handle);

    
    ?>
</html>