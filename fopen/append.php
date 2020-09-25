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

    $handle = fopen("datafile.txt", "a"); // open the file for appending
    fwrite($handle, "Another new text string here"); //$handle is a "resource" object
    fclose($handle);

    
    ?>
</html>