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
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function TimeGreeting($hourOfDay) {
    $hourOfDay = (int) $hourOfDay;
    print "<p> Hour:" . $hourOfDay;
    return $hourOfDay;
}

print "<p>START";
print "<p>WRONG";
print TimeGreeting("a");
print "<p>CORRECT";
print TimeGreeting;
print "<p>END";
?>.
    </body>
</html>
