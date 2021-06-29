<!DOCTYPE html>
<html>
<head>
<title>ワーク10</title>
</head>
<body>

<?php

$height = 1.767;
$weight = 78.4;
$BMI = $weight /($height * $height);

?>

<table border="1">
<tr>
 <th>身長</th>
 <th>体重</th>
 <th>BMI指数</th>
</tr>

<?php

print "<tr><td>{$height} m</td><td>{$weight} kg</td><td>{$BMI}</td></tr>\n";

?>
</table>

</body>
</html>
