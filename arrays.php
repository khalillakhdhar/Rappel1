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