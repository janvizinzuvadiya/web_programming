<!--10/1/2024
wednesday
Script_13: Develop a PHP script that converts temperature from Celsius
to Fahrenheit using the formula (C × 9/5) + 32.-->
<?php
echo"<html><style>div{width:10cm;height:2cm;padding:1cm;border-color:black;border-style:dashed;border-radius:4px;background-color:lightgreen;}
</style><div>";
$c=44.5;
$f= ($c * 9/5)+32;
echo"convert celsius to Fahrenheit:<br>(here,c=44.5)";
echo"<br>celsius:".$c."<br>fahrenheit:".$f."<br><br>";
echo "</div></html>";
?>
