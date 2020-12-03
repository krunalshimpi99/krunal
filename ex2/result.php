<?php
$bread = 0;
$vada = 0;
$samosa = 0;
$price = 0;
$bread = $_POST["bread"];
$vada = $_POST["vada"];
$samosa = $_POST["samosa"];
$vadapav = $_POST["vadapav"];
$samosapav = $_POST["samosapav"];

echo "no of bread ".$bread."<br>";
echo "no of samosas ".$samosa."<br>";
echo "no of vadas ".$vada."<br>";
echo "price of samosapav ".$samosapav."<br>";
echo "price of vadapav ".$vadapav."<br>";

while($samosa>0){
    if($bread>=2){
        $bread = $bread-2;
        $samosa = $samosa -1;
        $price = $price + $samosapav;
    }
    else{
    break;
    }
}
while($vada>0){
    if($bread>=2){
        $bread = $bread-2;
        $vada = $vada -1;
        $price = $price + $vadapav;
    }
    else{
        break;
    }
}
echo "remaning samosa's ".$samosa."<br>";
echo "remaning vada's ".$vada."<br>";
echo "remaning bread's".$bread."<br>";
echo "money is ".$price;
?>