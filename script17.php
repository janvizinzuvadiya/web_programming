<!-- 11/1/2024
thursday
Script_17: Create a PHP script to check if a given year is a leap year
and display the result. -->
<?php
echo"<html>
<style>div{ padding:4cm;background-color:#D8B731}#s{border-color:orange;background-color:transparent;}#s:hover{background-color:orange;}</style>
<div><form action='script17.php'>Enter year:<input type='text' name='year'><br><input id='s' type='submit'><br>";

$y=$_REQUEST['year'];
if($y%4==0)
{
    echo"<br>Year is a leap year";
}
else
{
    echo "<br>year is not a leap year";
}

echo "</div></form></html>";


?>
