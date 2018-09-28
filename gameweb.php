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
        $num = 71;
        $a = 1;
        for ($i = 2; $i < $num-1; $i++) {
    if($num%$i==0) {
        $a++;
    }
}
if($a==2) {
    print "khong la so nguyen to";
} else {
    print "la so nguyen to";
}
        ?>
    </body>
</html>
