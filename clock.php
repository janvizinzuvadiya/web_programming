
<?php
date_default_timezone_set('Asia/kolkata');
$b=date('H');
$c=date('i');
$d=date('s');
echo '<br>';

echo "<html>
<style>
#d
{
	align: center;
	font-size:5cm;
	background-color:maroon;
	font-family:digital-7;
}
#df
{
	font-family:digital-7;
}
@font-face
{
	font-family:digital-7;
	src: url(digital-7.ttf);
}
#f
{
	align: center;
	color:white;
	font-size:1cm;
}
body
{
	color:red;
}
td
{
	font-size:5cm;
}
	
</style>
<body>	
<br><br><br><br><br><br><br><br><br><br>
<table bgcolor='black' align='center'>

<tr>
<td><div id='d'>$b</div></td><td id='df'>:</td>
<td><div id='d'>$c</div></td><td id='df'>:</td>
<td><div id='d'>$d</div></td><td></td>
</tr>

<tr>
<td id='f'colspan='2'>HOURS</td>
<td id='f'colspan='2'>MINUTES</td>
<td id='f'colspan='2'>SECOND</td>
</tr>

</table>

</body>
</html>";
?>
