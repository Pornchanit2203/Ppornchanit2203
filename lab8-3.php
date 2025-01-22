<?php
//funtion
function add($n1,$n2)
{
    $result=$n1+$n2;
    echo "<br><br>num1 = $n1;<br>num2 = $n2;<br>Result Add : ".$result;
}

function subtract($n1,$n2=50)
{
    $result=$n1-$n2;
    echo "<br><br>num1 = $n1;<br>num2 = $n2;<br>Result Subtract : ".$result;
}

function Multiply($n1,$n2)
{
    $result=$n1*$n2;
    return $result;
}


function Divide($n1,$n2,&$result)
{
    $result=$n1/$n2;
}

$num1=10;
$num2=20;
$resultDivide=0;

Divide($num1,$num2,$resultDivide);
echo "<br><br>num1 = $num1;<br>num2 = $num2;<br>Result Divide : ".$resultDivide;


$resultMutiply = Multiply($num1,$num2);
echo  "<br><br>num1 = $num1;<br>num2 = $num2;<br>Result Multiply : ".$resultMutiply;
subtract($num1);
add($num1,$num2);

?>