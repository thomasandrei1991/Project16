<?php
    $sex = "Male";
    $isMale = true;
    function checkGender($sex){
        global $isMale;
        if ($isMale) {
            echo "You are male";
        } else {
            echo "You are female";
        }
    }
    function checkGender2($sex){
        global $isMale;
        if ($isMale) {
            return "Sex : " . $sex;
        } else {
            return "Female";
        }
    }

?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            <?php
                echo checkGender2($sex);
            ?>
        </h1>
    </body>
</html>