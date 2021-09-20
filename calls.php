<?php
require("Fruit.php");
$apple=new Fruit();
$banana=new Fruit();
$apple->setNom("pomme");
$banana->setNom("banane");
echo $apple->getNom();
echo "<br>";
echo $banana->getNom();
?>
<br><br>
<?php
$ch="hello world";
if(strpos($ch,'.')!=(strlen($ch)+1))
{
    $ch=$ch.'.';
}
echo ucfirst($ch);
?>