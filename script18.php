<!-- 11/1/2024
thursday
Script_18: Write a PHP script that generates a random number
between 1 and 10 and lets the user guess it. -->
<?php
echo "<html>
<style>div{padding:2cm;background-color: #80cbc4;}#s{border-color:skyblue;background-color:transparent;}#s:hover{background-color:skyblue;}</style><div>
<form method='post' action='script18.php'>
Guess no between 1 to 10:
<input type='number' name='no'>
<input type='submit' id='s' value='submit'>
</form>";
$b=$_REQUEST['no'];
$a=rand(1,10);
echo"the correct number is=".$a."<br>";
if($a != $b)
{
    echo"your supposition is not correct";
}
else
{
    echo"your supposition is correct";
}
echo "</div></html>";
?>
