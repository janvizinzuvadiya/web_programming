<!-- 11/1/2024
thursday
Script_16: Develop a PHP script that takes a sentence as input 
and counts the number of vowels in it. -->
<?php
echo"<html><style>div{background:#80ccb2;padding:1cm;width:50%}#s{background-color:transparent;border-color:pink;}</style><div><form action='script16.php'>";
echo"Enter your Sentence:<input type type='text' name='a'><br><br>";
echo"<input type='submit'value='submit'id='s'><br><br>";
error_reporting(0);
$a=$_REQUEST['a'];
$b=strlen($a);
$c=0;
for($i=0;$i<=$b;$i++)
{
if($a[$i]=='a'||$a[$i]=='e'||$a[$i]=='i'||$a[$i]=='o'||$a[$i]=='u'||$a[$i]=='A'||$a[$i]=='E'||$a[$i]=='O'||$a[$i]=='U'||$a[$i]=='I')
{
    $c+=1;
}
}
echo"<br>you have entered this much vowels=".$c;
echo"</form></div></html>";
?>