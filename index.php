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
    </head>
    <body>
        <?php
        $numbers = array(1,2,3,4,5);
        $i = 0;
        $j = 0;
        for (; $i > 2 || $j < 2 ;) {        
            $j = $i++ + ++$j;
            echo $numbers[$i];
            echo $numbers[$j];
        }
        ?>
    </body>
</html>
