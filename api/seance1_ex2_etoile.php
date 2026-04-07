<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
fonction triangle($a){
for($i=1;$i<=$a;$i++){
for($j=$i;$j<=$a;$j++){
      echo("&nbsp;&nbsp");
}
for($p=1;$p<=(2*$i-1);$p++){
    echo"*";
}
echo"<br>";
    
}
  
}
triangle(6)


?>
    
</body>
</html>