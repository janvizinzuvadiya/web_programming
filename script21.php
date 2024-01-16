<!-- Script_21 Script to check if a given number is a palindrome or not and display the result. -->
<?php
echo "<html>
<style>div{padding:2cm;background-color: pink;}#s{border-color:#F08080;background-color:transparent;}#s:hover{background-color:#F08080;}</style>
<div><br><br>
<form action='script21.php'>
Enter value to check if <br>a given number is a Palindrome or not :
<input type='text' name='no'><br>      
<input type='submit' id='s' name='submit'><br>";
$no=$_REQUEST['no'];
$check=strrev($no);
if($check==$no)
{echo "<br>Given number is a palindrome<br><br>";}
else
{echo "<br>Given number is not a palindrome<br><br>";}
?>

