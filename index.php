<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            body{
                font-family: Helvetica;
                font-size: 15pt;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        //echo("Hello")
        $name = "Jack";
        $surname = "Mark";
        
        echo $name . $surname;
        
        if ($name == "Jack") {
                echo "</br> <h4>$surname</h4>";
        } else {
                echo "<h2>You aren't Mark</h2>";
        }
        
        // It's time to display date!!
        
        date_default_timezone_set('Asia/Bangkok');
        echo "Time now ";
        echo date("H : i : s") . "</br> Today " . date("d M Y");
        ?>
        
    </body>
</html>