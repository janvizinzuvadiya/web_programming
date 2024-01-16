<!-- Script_22 Script to calculate the area of a circle based on the given radius and display the result. -->
<?php
echo "<html><style>div{margin-left:4cm;width:50%;padding:1cm;background-color:skyblue;}
</style><div align='center'><br><br><form action='script22.php'>
<input type='text' name='r' placeholder='enter radious'><br>
<input type='hidden' name='hd'>Hit Enter to Show the Result";
$rd=$_REQUEST['r'];
$area=3.14*$rd*$rd;
echo"<br><br>Area of the circle:".$area;
echo "<br><br></div></form></html>";
?>

