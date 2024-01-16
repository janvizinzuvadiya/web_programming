<!--10/1/2024
wednesday
Script_14: Create a PHP script that calculates the sum of all numbers
from 1 to 100 and displays the result.-->
<?php
echo "<html><style>
div{background-color: #80cbc4;border: 1px solid black;border-radius: 200px;}
</style><div>";
$sum=0;
for($i = 0; $i < 101; $i++) 
{$sum=$sum+$i;}
echo "<br> <p align='center'>sum of 1 to 100= ". $sum."</p><br><br>";
echo "</div></html>";
?>