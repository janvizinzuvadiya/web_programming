<!-- Script_25 Script to swap 2 nos without using 3rd variable using arithmetic operators\ -->
<?php
echo "<html><style>div{margin-left:6cm;padding:1cm;width:8cm;background-color:F1948A;}#s{border-color:#CD6155 ;#background-color:transparent;}#s:hover{background-color:#CD6155 ;}</style><div><form action='script25.php'>
Enter Value for A:<input type='text' name='1'><br>
Enter Value for B:<input type='text' name='2'><br><br>
<input type='submit' id='s' value='submit'></form><br><br>
After Swapping:<br>";
$a=$_REQUEST['1'];
$b=$_REQUEST['2'];
echo"A=".$a+$b-$a;
echo"<br>B=".$a+$b-$b;
echo "</div></html>";
?>              