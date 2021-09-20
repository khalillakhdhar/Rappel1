<?php
$cars=array("peugeot","bmw","toyota","mercedes");
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++)
{
    if($cars[$x]!="bmw")
    {
        echo $cars[$x];
        echo "<br>";
    }
}
?>
<?php
$numbers=array(14,61,12,202,11);
for($y=0;$y<count($numbers);$y++)
{
if($numbers[$y]%2==0)
{
    echo $numbers[$y];
    echo "<br>";
}
}
?>
