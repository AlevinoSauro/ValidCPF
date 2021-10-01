<?php
            //Decimo digito

$CPF = $_POST ['CPF'];

$ind1 = 9;
$decre1 = 10;
$soma1 = 0;

for($ind1=0;$ind1<9;$ind1++)
{
    $digit1 = $CPF[$ind1] * $decre1;
    $decre1 = $decre1-1;
    $soma1 = $soma1 + $digit1;
}
$resto1 = $soma1%11;
$sub1 = 11 - $resto1;

if ($sub1>=10)
{
    $digit1 = 0;
}else{
    $digit1 = $sub1;
}
            //Decimo Primeiro digito
$CPF = $_POST ['CPF'];
$ind2 = 10;
$decre2 = 11;
$soma2 = 0;

for($ind2=0;$ind2<10;$ind2++)
{
    $digit2 = $CPF[$ind2] * $decre2;
    $decre2 = $decre2-1;
    $soma2 = $soma2 + $digit2;
}
$resto2 = $soma2%11;
$sub2 = 11 - $resto2;

if ($sub2>=10)
{
    $digit2 = 0;
}else{
    $digit2 = $sub2;
}

//informando a validação
if ($digit1 == $CPF[9] and $digit2 == $CPF[10])
{
    print "CPF valido";
}else{
    print "CPF invalido";
}

