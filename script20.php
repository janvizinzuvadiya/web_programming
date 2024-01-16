<!-- 13/1/2024
saturday
Script_20 Script to find the factorial of a given number and display the result. -->
<?php
echo "<html><style>
div{padding:2cm;background-color: #80cc80;}#s{border-color:lightgreen;background-color:transparent;}#s:hover{background-color:lightgreen;}
</style>
<div><br><br>
<form action='script20.php'>
Enter value to find it's Factorial:<br>
<input type='text' name='no' placeholder='enter a number'>
<input type='submit'id='s' name='submit'>";
$no=$_REQUEST['no'];
$fact=1;
for($i=$no;$i>0;$i--)
{$fact=$fact*$i;}
echo" <br><br>Factorial of the number:".$fact."<br><br>";
echo "</form></div></html>";
?>