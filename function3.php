<?php
echo"<html><style>div{color:white;border:1;padding:30px;border-radius:30px;</style>";
echo"<table>";

echo"<tr><td colspan='2' align='center' style='border-radius:40px;padding:8px;' bgcolor=#AED6F1>Date & Time Functions</td></tr>";

echo"<tr><td><div style='background-color:#85C1E9 ;'>";
echo"date(\$format, \$timestamp)<br> Formats a local date and time.<br>";
echo date("d-m-Y H:i:s");
echo"<br><br></div></td>";

echo"<td><div style='background-color:#3498DB;'>";
echo"time() <br>Returns the current Unix timestamp.<br>";
echo time();
echo"<br><br></div></td></tr>";

echo"<tr><td><div style='background-color:#2E86C1;'>";
echo"strtotime(\$time, \$now)<br> Converts a date/time string into a Unix timestamp.<br>";
echo strtotime("2024-01-20");
echo"<br><br></div></td>";

echo"<td><div style='background-color:#2874A6;  '>";
echo"<br>gmdate(\$format, \$timestamp)<br>Formats a GMT/UTC date and time<br>";
echo gmdate("Y-m-d H:i:s");
echo"<br><br></div></td></tr>";

echo"<tr><td><div style='background-color:#1B4F72;'>";
echo"<br>mktime(\$hour, \$minute, \$second, \$month, \$day, \$year)<br>Creates a Unix timestamp.<br>";
echo mktime(12, 0, 0, 1, 20, 2023);
echo"<br><br></div></td>";

echo"<td><div style='background-color:#1C3961 ;'>";
echo"date_default_timezone_set(\$timezone)<br>Sets the default timezone.<br>";
echo date_default_timezone_set("America/New_York");
echo"<br><br></div></td></tr>";

echo"<tr><td colspan='2'><div style='background-color:#1C2833 ;'>";
echo"<br><br></div></tr>";

echo"</table></html>";
?>
