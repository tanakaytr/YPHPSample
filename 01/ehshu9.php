
<?php
$data = [70,85,15,20,55];
$num = [0,1,2,3,4]
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <table border="1">
  
  <?php
      foreach($data as $d){
          foreach($num as $n){
          {
      
              print "<tr><td>" . $n . "</td><td>" . $d . "</td><td>" . $d*2 . "</td><td>" . $d*3 . "</td></tr>";
          }
      }
      
  ?>
  </table>
  </body>
</html>
