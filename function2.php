<?php
echo"<html><style>div{color:white;border:1;padding:30px;border-radius:30px;</style>";
echo"<table>";

echo"<tr><td colspan='2' align='center' style='border-radius:40px;padding:8px;' bgcolor=#CCD1D1>String Functions</td></tr>";

echo"<tr><td><div style='background-color:#2874A6;'>";
echo"strlen(\$string) <br>Returns the length of a string.<br>";
$h="hello world";echo "value= ".$h."<br>length of string=".strlen($h);
echo"<br><br></div></td>";

echo"<td><div style='background-color:#1ABC9C;'>";
echo "strpos(\$haystack,\$needle)<br>Finds the position of a substring in a string.<br>";
echo "main string= (\"hello\",\"mini\")<br>" ;echo strpos("Hello","Mini");
echo "<br><br></div></td></tr>";

echo"<tr><td><div style='background-color:#48C9B0;'>";
echo"str_replace(\$search,\$replace,\$string)<br>Replaces occurrences of a substring with another substring in a string.<br>";
echo"main string= (Hello,mini)<br>";echo str_replace("mini","World","Hello,mini");
echo"<br><br></div></td>";

echo"<td><div style='background-color:#ABEBC6;'>";
echo "substr(\$string, \$start, \$length)Returns a portion of a string.<br>";
echo "main string= (\"hello\",\"mini\")[start=1,end=5]<br>" ;echo substr("Hello mini",0,5);
echo "<br><br><br></div></td></tr>";

echo"<tr><td><div style='background-color:#28B463;'>";
echo"strtolower(\$string) <br>Converts a string to lowercase. <br>";
echo"main string= (Hello,Mini)<br>";echo strtolower("Hello,Mini");
echo"<br><br></div></td>";

echo"<td><div style='background-color:#17A589;'>";
echo "strtoupper(\$string)<br> Converts a string to uppercase.<br>";
echo "main string= (\"hello\",\"mini\")<br>" ;echo strtoupper("Hello mini");
echo "<br><br></div></td></tr>";

echo"<tr><td><div style='background-color:#138D75;'>";
echo"ucfirst(\$string)<br> Converts the first character of a string to uppercase.<br>";
echo"main string= (hello,mini)<br>";echo ucfirst("hello,mini");
echo"<br><br></div></td>";

echo"<td><div style='background-color:#717D7E;'>";
echo "strrev(\$string) <br>Reverses a string.<br>";
echo "main string= (\"hello\",\"mini\")<br>" ;echo strrev("Hello mini");
echo "<br><br></div></td></tr>";

echo"<tr><td colspan='2'><div style='background-color:#AAB7B8;'>";
echo"trim(\$string) <br>Removes whitespace (or other characters) from the beginning and end 
of a string.<br>";
echo"main string= (hello,mini)<br>";echo ucfirst("hello,mini");
echo"<br><br></div></td></tr>";

echo"</table></html>";
?>
