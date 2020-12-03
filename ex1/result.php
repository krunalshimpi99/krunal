<html>
<body>

<?php
$load=0;
$x=0;
$n = $_POST["n"];
$load1 = $_POST["load1"];
$load2 = $_POST["load2"];
$load3 = $_POST["load3"];
$load4 = $_POST["load4"];
$load5 =$_POST["load5"];
?>
servers are <?php echo $n; ?><br>
load 1 is <?php echo $load1; ?><br>
load 2 is <?php echo $load2; ?><br>
load 3 is <?php echo $load3; ?><br>
load 4 is <?php echo $load4; ?><br>
load 5 is <?php echo $load5; ?><br>
<?php
for ($x = 0; $x < 5; $x++){
    if($load[$x]<50)
    {
        $n=$n/2;
    }
    else{
        $n=2*($n+1);
    }
    $n=round($n);
}
?>
<?php echo $n; ?><br>


</body>
</html>