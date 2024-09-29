<?php
//first way
$sdata=array("sid"=>101,"$sname"=>"tisha","sadd"=>"padra");
echo $sdata["sid"]."<br>";
echo $sdata["sname"]."<br>";
echo $sdata["sadd"]."<br>";

//second way
$edata["eid"]=101;
$edata["eept"]="sales";
$edata["eid"]=25000;
echo "eid=".$edata["eid"]."<br>";
echo "eid=".$edata["eid"]."<br>";
echo "eid=".$edata["eid"]."<br>";
foreach ($sdata  as $x )
{
    echo"<br>";
    echo $x;
}
?>