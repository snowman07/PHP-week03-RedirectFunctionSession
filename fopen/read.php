<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $handle = fopen("datafile.txt", "r");
    if($handle) {

        while(!feof($handle)) {
            $buffer = fgets($handle, 4096); // this is a single line from the text file //4096 kilobytes of information
            $existingText .= $buffer; //append the variable; this then is ALL lines from the text file

        } // end loop

        echo $existingText;
        fclose($handle);
    }

    ?>
    
</body>
</html>