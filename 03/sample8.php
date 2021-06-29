<!DOCTYPE html>
<html>
<head>
<title>サンプル</title>
</head>
<body>

<?php

$num1=10;
$num2=5;
$num3=$num1+$num2;
$num4=$num1-$num2;
$num5=$num1*$num2;
$num6=$num1/$num2;
$num7=$num1%$num2;

?>

<table border="2">

<tr bgcolor="#AAAAAA">
<th>文字列</th>
</tr>

<?php

$msg1 = "こんにちは";
$msg2 = "さようなら";
$msg3 = "またあした";

print "<tr><td>".$msg1.$msg2."</td></tr>\n";
print "<tr><td>".$msg2.$msg3."</td></tr>\n";
print "<tr><td>".$msg1.$msg3."</td></tr>\n";

?>

</table>

</body>
</html>
