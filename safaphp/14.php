<?php
$a=10;
$b=20;
$c=30;
if ($a>=$b && $a>=$c)
{
echo "$a is greater";
if ($a%4==0 && $a%5==0)
{
echo "$a is divisible by 4 and 5";
}
}
elseif ($b>=$a && $b>=$c)
{
echo "$b is greater";
if ($b%4==0 && $b%5==0)
{
echo "$b is divisible by 4 and 5";
}
}
else
{
echo "$c is greater";
if ($c%4==0 && $c%5==0)
{
echo "$c is divisible by 4 and 5";
}
}
?>

