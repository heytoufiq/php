<?Php
$i=0;
echo "<table border =\"1\" style='border-collapse: collapse'><tr><td border =\"1\">";
for($i==0;$i<=120;$i++){
echo "chr($i) = ".chr($i)."<br>"; 
if($i%5 == 0 and $i>20){
    echo "</td><td valign=top>";}
}
echo "</td></table>";
?>

