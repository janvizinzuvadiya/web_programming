<?php
$unm=$_GET['unm'];
$pwd=$_GET['pwd'];
$nm=$_GET['nm'];
$add=$_GET['add'];
$country=$_GET['country'];
$zip=$_GET['zip'];
$email=$_GET['email'];
$sx=$_GET['sx'];
$lg=$_GET['lg'];
$ab=$_GET['ab'];
echo "

<table border=1 align='center' style=background-image:url('bg3.jpeg');> 
   <tr>
    <td colspan='2'>
        Registration Form
    </td>
    </tr>
    <tr>
        <td>Username:</td>
        <td>$unm</td>
    </tr>  
    <tr>
        <td>Password:</td>
        <td>$pwd</td>
    </tr>      
    <tr>
        <td>Name:</td>
        <td>$nm</td>
    </tr>
    <tr>
        <td>Address:</td>
        <td>$add</td>
    </tr>
    <tr>
        <td>Country:</td>
        <td>$country</td>
    </tr>
    <tr>
        <td>ZIP Code:</td>
        <td>$zip</td>
    </tr>
    <tr>
        <td> Email:</td>
        <td>$email</td>
    </tr>
    <tr>
    <td>Sex:</td>
    <td>$sx</td>
    </tr>
    <tr>
        <td>Language:</td>
        <td>$lg</td>
    </tr>
    <tr>
        <td>About:</td>
        <td>$ab</td>
    </tr>
</table>";
?>