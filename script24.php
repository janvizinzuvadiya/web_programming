 <!-- Script_24 Script to calculate the square root of a given number and display the result. -->
<?php
echo"<html><style>div{margin-left:8cm;padding:1cm;width:5cm;background-color:#F4D03F;}#s{border-color:#EB984E;background-color:transparent;}#s:hover{background-color:#EB984E;</style><div><br><form action='script24.php'>
Enter value to check it's square root:<br>
<input type='text' name='no'><br><br>
<input type='submit' id='s' name='sbt'><br><br>";
$no=$_REQUEST['no'];
$ans=sqrt($no);
echo"Square root of ".$no." is=".$ans;
echo"</form><br></div></html>";
?>