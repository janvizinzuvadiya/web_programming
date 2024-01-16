<!-- 11/1/2024
thursday
Script_15: Write a PHP script to find the largest of three 
numbers entered by the user. -->
<?php
echo "<html><style>
div{padding:1cm;background-color:#D83176;width: 500px;}#s{border-color:pink;background-color:transparent;}#s:hover{background-color:pink;}
</style><div><form action='script15.php'>
<table><tr><td align='center',colspan='x2'># ENTER VALUES TO FIND MAXIMUM FROM THEM #</td></tr>
<tr><td>Enter First Value:</td><td><input type='text' name='a'></td></tr>
<tr><td>Enter Second Value:</td><td><input type='text' name='b'></td></tr>
<tr><td>Enter Third Value:</td><td><input type='text' name='c'></td></tr>
<tr><td align='center' colspan='2'><input type='submit' id='s' name='sbt'></td></tr><br>";
$a=$_REQUEST['a'];
$b=$_REQUEST['b'];
$c=$_REQUEST['c'];
if ($a>$b && $a>$c)
{echo"<tr><td>A is Bigger.</td></tr>";}
else if($b>$a && $b>$c)
{echo"<tr><td>B is Bigger.</td></tr>";}
else
{echo"<tr><td>C is Bigger.</td></tr>";}
echo"<br><br></table></form></div></html>";
?>