<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            $password = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J",
            "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X",
            "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9");
            rand(5,10);
            function displayPassword(){
                if(sizeOf($password)<=9){
                    echo $password;
                } else {
                    return;
                }
            }
            displayPassword();
        ?>
    </body>
</html>
