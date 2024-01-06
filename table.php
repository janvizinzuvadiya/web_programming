<html>
<form action="table.php" method="get">
<lable>enter start:</lable>
<input type="text" name="start">
<lable>enter end:</lable>
<input type="text" name="end">
<input type="submit" name="submit" value="submit">
</form>
</html>

<?php

$start=$_GET['start'];
$end=$_GET['end'];

echo"<table cellspacing='2' cellpadding='1' bgcolor='pink'>";

 for($i=1;$i<11;$i++)
 {
 echo "<tr>";
    for($j=$start; $j<=$end; $j++)
    {  
       $ans=$j*$i;
       echo "<td>$j</td>";
       echo "<td>*</td>";
       echo "<td>$i</td>";
       echo "<td>=</td>";
       echo "<td>$ans</td>";
       echo "<td border=1 style='background-color:#80cbc4;'></td>";
      
    } 
    echo "<tr>";

 }
echo "</table>";
?>
