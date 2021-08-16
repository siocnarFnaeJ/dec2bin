<html>
<head>
<title></title>
</head>
<body>
<div class="nukr"><h2 class="col_insert" >Decimal para binário</h2></div>
<form action="" method="post" name="insert_form" id="insert_form" class="comment-form">
<table class="tableI1" align="left" border="0" bordercolor="#FFFFFF" >
<tr><td ><b><i>Insira o número decimal.</b></i></td>
<td><input id="number" name="number" type="text" size="30" /> 
<tr><td></td><td><input type="submit" id="btnsubmit" name="btnsubmit" value="Calculate" size="30"/></td></tr>
<tr><td></td><td>       </td></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['btnsubmit']))
{
$number ;$mor=0;
$number=$_POST['number'];
echo"Número decimal. = $number<br>";
$mor=decbin($number);
echo"Número binário. = $mor";
}
?>