<!--10/1/2024
wednesday
Script_11: Create a PHP script that checks whether a given number is 
even or odd and displays the result.-->
<?php
echo"<html>
<style>div{background-color:lightblue;height:3cm;width:10cm;}input{background-color:pink;}</style>
<div><form action='script11.php'>
Enter the number to check wheather it is odd or even:<br><input type='text' name='no'>    
<br>Hit ENTER to check</form>";
$no=$_REQUEST['no'];
if($no%2==0){echo "the number is Even";}
else{echo "the number is Odd";}
echo "</div></html>";
?>