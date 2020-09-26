<?php
function pertama()
{
// no 1
for($y=1; $y<=10; $y++)
{
if ($y==4)
{
    echo "";
}elseif($y==5)
{
    echo "";
}elseif($y==6)
{
    echo "";
}elseif($y==7)
{
    echo "";
}else
{
    echo $y;
}
}
}
pertama();
// ==========================
echo PHP_EOL;
function kedua()
{
// no2
for($k=5;$k>=1;$k--)
if($k==2 || $k==1)
{
    echo "*";
}else
{
    echo "$k \t";
}
}
kedua();
echo PHP_EOL;
function ketiga()
{
    // no 3
for($a=1;$a<=4;$a++)
if($a==1 || $a==3)
{
    echo $a."a \t";
}else
{
    echo $a."b \t";
}
}
ketiga();
echo PHP_EOL;
function keempat()
{
// no4
for($m=1;$m<=7;$m++)
{
    if($m==4)
    {
        echo "a";
    }elseif($m==5)
    {
        echo "a";
    }elseif($m==6)
    {
        echo "a";
    }else
    {
        echo $m;
    }
}
}
keempat();
echo PHP_EOL;
function kelima()
{
// no 5
for($i=4;$i>=0;$i--)
{
    if($i==2)
    {
        echo "a";
    }elseif($i==0)
    {
        echo "a";
    }else
    {
        echo $i;
    }
}
}
kelima();
echo PHP_EOL;
function keenam()
{
// no 6
for($h=0;$h<=4;$h++)
{
    if($h==0)
    {
        echo "a";
    }elseif($h==1)
    {
        echo "a";
    }else
    {
        echo $h;
    }
}
}
keenam();
// =========================
?>