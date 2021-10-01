<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="maquiagem.css">
    <title>
        Projetinho da Facul
    </title>
</head>
<body>

    <div class="title">
        <h2 i18n="name"  align="center" id="logo">Validação de CPF</h2>
        <p align="center">Foi feito a verificação e o resultado é: </p>
    </div>

    <a class="php">
    <?php
//10º digito
$CPF = $_POST ['CPF'];
$ind1 = 9; $decre1 = 10; $soma1 = 0;

for($ind1=0;$ind1<9;$ind1++)
{
    $digit1 = $CPF[$ind1] * $decre1;
    $decre1 = $decre1-1;
    $soma1 = $soma1 + $digit1;
}
$resto1 = $soma1%11;
$sub1 = 11 - $resto1;

//11º digito
$CPF = $_POST ['CPF'];
$ind2 = 10; $decre2 = 11; $soma2 = 0;

for($ind2=0;$ind2<10;$ind2++)
{
    $digit2 = $CPF[$ind2] * $decre2;
    $decre2 = $decre2-1;
    $soma2 = $soma2 + $digit2;
}
$resto2 = $soma2%11;
$sub2 = 11 - $resto2;

//verifica as subtrações
if ($sub1 and $sub2 >=10)
{
    $digit1 and $digit2 = 0;
}else{
    $digit1 = $sub1;
    $digit2 = $sub2;
}

//Informando a Validação
if ($digit1 == $CPF[9] and $digit2 == $CPF[10])
{
    print "CPF valido";
}else{
    print "CPF invalido";
}
?>
    </a>

    <div class="footer">
        <a href="https://github.com/AlevinoSauro/ValidCPF">
            <picture>
                <source srcset="/ValCPF/img/webp/github_link.png" type="image/webp">
                <img src="/ValCPF/img/github_link.png" alt="Git" />
            </picture>
        </a>
    </div>

</body>
</html>


