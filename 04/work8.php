<!DOCTYPE html>
<html>
<head>
<title>ワーク8</title>
</head>
<body>

<?php

$hour = 24;

switch($hour){
 case 1:
 case 2:
 case 3:
 case 4:
 case 5:
 print "寝ています<br/>\n";
 break;
 
 case 6:
 case 7:
 case 8:
 case 9:
 print "おはようございます。<br/>\n";
 break;
 
 case 10:
 case 11:
 case 12:
 case 13:
 case 14:
 case 15:
 case 16:
 case 17:
 case 18:
 print "こんにちは<br/>\n";
 break;
 
 case 19:
 case 20:
 case 21:
 case 22:
 print "お疲れさまでした<br/>\n";
 break;
 
 case 23:
 case 24:
 print "おやすみなさい<br/>\n";
 break;
 
 default:
 print "その他です<br/>\n";
 break;
}

?>

</body>
</html>
