<!DOCTYPE html>
<html>
<head>
<title>ワーク5</title>
</head>
<body>

<?php

$weight = 56;
$height = 1.825;
$BMI = $weight / ($height * $height);
if($BMI < 20) {
 print "痩せ気味です";
}

elseif(($BMI >= 20) && ($BMI < 24)) {
 print "普通です";
}

elseif(($BMI >= 24) && ($BMI < 26)) {
 print "太り気味です";
}

elseif($BMI <= 26)  {
 print "太りすぎです";
}

?>

</body>
</html>
