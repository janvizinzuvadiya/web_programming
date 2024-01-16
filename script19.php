<!--Script_19: Develop a PHP script that takes a positive integer as input
and checks whether it is a prime number. -->
<?php
echo "<html>
<style>div
{padding:3cm;background-color: #9441BE;}#s{border-color:gray;background-color:transparent;}#s:hover{background-color:gray;}
</style><div>
<form action='script19.php'>
Enter the number to check wheather the number is prime or not:<br>
<input type='text' id='s' name='no'>
<input type='hidden' name='hd'>
</form>";
$a=$_REQUEST['no'];
$sum=0;
for($i=1;$i<=$a;$i++) 
{$b=$a%$i;
if($b==0)
{$sum=$sum+1;}
}
if($sum>2)
{echo "The number is prime";}
else
{echo "The number is not prime";}
?>
