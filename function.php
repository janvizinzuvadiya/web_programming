<?php
echo"<html><style>div{color:white;border:1;padding:30px;border-radius:30px;</style>";
echo"<table>";
echo"<tr><td colspan='2' align='center' style='border-radius:40px;padding:8px;' bgcolor='pink'>Mathematical Functions</td></tr>";
echo "<tr><td><div style='background-color:#D98880;'>";
$a=-44;
echo"abs(\$number)<br> Returns the absolute value of a number.<br>";
echo "value= ".$a."<br>";echo "Absolute value of 44=".abs($a);
echo"</div></td>";

echo"<td><div style='background-color:#E59866;'>";
echo"sqrt(\$number) <br>Returns the square root of a number<br>";
$b=4;
echo "Square root of 4 =";
echo sqrt($b)."<br><br>";
echo"</div></td></tr>";

echo"<tr><td><div style='background-color:#F0B27A;'>";
echo "rand(\$min,\$max) <br>Generates a random number within a range.<br>";
echo "Random number generator between 1 to 100:<br>";
echo rand(1,100);
echo "<br><br></div></td>";

echo"<td><div style='background-color:#F5B041;'>";
echo"round(\$number) <br>Rounds a floating-point number to the nearest integer.<br>";
$c=22.3;echo "value= ".$c;
echo "<br>Nearest Integer:".round($c);
echo"<br></div></td></tr>";

echo"<tr><td><div style='background-color:#F5B7B1'>";
echo "ceil(\$number) <br>Rounds a floating-point number up to the nearest integer.<br>";
$d=33.2;echo "value= ".$d."<br>Number up to the Nearest Integer=".ceil($d);
echo "<br><br></div></td>";

echo"<td><div style='background-color:#D2B4DE;'>";
echo"floor(\$number) <br>Rounds a floating-point number down to the nearest integer.<br>";
$e=22.2;echo "value= ".$e."<br>Number down to the Nearest Integer=".floor($e);
echo"<br></div></td></tr>";

echo"<tr><td><div style='background-color:#BB8FCE'>";
echo "pow(\$base,\$exponent)Raises a number to the power of another number.<br>";
echo "value= 2<sup>3</sup><br>"."<br>power of 2 raish to 3=".pow(2,3);
echo "<br><br></div></td>";

echo"<td><div style='background-color:#7FB3D5'>";
echo"max(\$values)<br> Returns the highest value in an array or list of arguments.<br>";
$f=array(1,2,3,4,5);
echo "values= (1,2,3,4,5)";
echo "<br>The Highest value =".max($f);
echo"<br><br></div></td></tr>";

echo"<tr><td colspan='2'><div style='background-color:#5DADE2;'>";
echo "min(\$values)<br> Returns the lowest value in an array or list of arguments.<br>";
$g=array(1,2,3,4,5);echo "value= (1,2,3,4,5)"."<br>The Lowest value =".min($g);
echo "<br><br></div></td></tr>";

echo"</table></html>";
?>