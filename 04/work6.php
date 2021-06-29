<!DOCTYPE html>
<html>
<head>
<title>ワーク6</title>
</head>
<body>

<?php

$a = 0;

if( isset($a)) {
 print "isset($a) is true<br />";
}
else {
 print "isset($a) is false<br />";
}

if (empty($a)) {
 print "is_string($a) is true<br />";
}
else {
 print "is_string($a) is false<br />";
}

if (is_numeric($a)) {
 print "is_numeric($a) is true<br />";
}
else {
 print "is_numeric($a) is false<br />";
}

?>

</body>
</html>
