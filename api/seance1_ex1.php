<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php   
echo("<table border='3'>");
for($i=1;$i<=9;$i++){
    echo("<tr>");
    for($a=1;$a<=9;$a++){
        $b=$a*$i ;
        echo("<td>$b</td>");
    }
    echo("</tr>");

}
echo("</table>");

function TableM($linge,$colnne){
   echo("<table border='3'>");
for($i=1;$i<=$linge;$i++){
    echo("<tr>");
    for($a=1;$a<=$colnne;$a++){
        $b=$a*$i ;
        echo("<td>$b</td>");
    }
    echo("</tr>");

}
echo("</table>"); 
}
//TableM(9,9)
TableM(20,20)

?>
</html>