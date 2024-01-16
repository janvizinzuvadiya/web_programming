<!-- 1/10/2024
wednesday
Script_10: Write a PHP script to calculate the area of a rectangle 
given its length and width. -->
<?php
echo"<html><style>
input {background-color:lightgreen;border-radius:2px;}
#st {background-color:transparent;}
div{background-color:yellow;border-radius:2px;}</style>
</html>";
echo"<div><form action='script10.php'>";
echo "Enter LENGTH:<input type='text' name='l' placeholder='enter length'><br>";
echo "Enter WIDTH:<input type='text' name='w' placeholder='enter width'><br><br>";
echo"<input id='st' type='submit' value='submit' name='sb'>";
echo"</form>";
$len=$_REQUEST['l'];
$wid=$_REQUEST['w'];
$ans=$len*$wid;
echo "<font color='blue'> Area of the Rectangle=".$ans;
echo"</div>";
?>