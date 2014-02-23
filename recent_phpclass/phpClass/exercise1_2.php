<html>
    <head>
    <title>Exercise 1_2</title>
     <style type="text/css">
            body{
                font-family: Helvetica;
                font-size: 16pt;
            }
        </style>
    </head>
    <body>
<?php
$_ex1_2_1 = (1!=2)&&(1>0)?"true":"false";
echo "2.1 Result is " . $_ex1_2_1;

$_ex1_2_2 = !(1==2)?"true":"false";
echo "<br/> 2.2 Result is " . $_ex1_2_2;

$_ex1_2_3 = (1==2)||(1>0)?"true":"false";
echo "<br/> 2.3 Result is " . $_ex1_2_3;

$_ex1_2_4 = (1==2)&&(1>0)?"true":"false";
echo "<br/> 2.4 Result is " . $_ex1_2_4;
?>
    </body>
</html>