<!DOCTYPE html>
<html>
<head>
<title>ワーク10</title>
</head>
<body>

<?php

$age = 18;

//ここに三項演算子（条件演算子）を利用して20歳以上ならTrue、20歳未満ならFalseを返す処理
$result = ($age >= 20 ) ? true : false;

if ($result){
 print "成人です";
}
else {
 print "未成年です";
}

?>

</body>
</html>
