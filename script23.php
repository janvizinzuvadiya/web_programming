 <!-- Script_23 Script to determine the largest among three numbers and display the result. -->
<?php
echo"<html><style>
#d{padding:1cm;width:4cm;background-color:#9FE2BF;}
#s{border-color: #138D75;background-color:transparent;}#s:hover{background-color: #138D75;}
#dd{padding:1cm;width:4cm;background-color:#138D75;}
</style><div><div id='d'><form action='script23.php'>
Check Which Number is the largest among three numbers:<br><br>
Enter First value: <input type='text' name='1'><br>
Enter Second value: <input type='text' name='2'><br>
Enter Third value: <input type='text' name='3'><br>
<input type='submit' value='submit' id='s'>
</form></div><div id='dd'>";
$a=$_REQUEST['1'];
$b=$_REQUEST['2'];
$c=$_REQUEST['3'];
if($a>$b && $a>$c)
{echo"<br>First number is Bigger.<br>";}
else if($b>$a && $b>$c)
{echo"<br>Second number is Bigger.<br>";}
else
{echo "<br>Third number is Bigger.<br>";}
echo"</form></div></div></html>";
?>