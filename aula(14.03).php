<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    /*$varC = 5 ;
    $varD = 8 ;

    IF( $varC == $varD){
        echo" As variaveis  $varC e $varD são iguais;
    }
elseif($varc > $vard){
}*/

/*$idade = 50;

$peso = 92;

if(idade <18 && peso<50){
    echo"risco leve , desnutrição";
}
elseif(idade <18 && peso >=60 && peso <=90 ){
    echo"risco normal";

}

elseif(idade <18 && peso >90  && peso <=120){
    echo"risco alto";
}

elseif(idate <18 && peso >120){
    echo"risco estremante alto!";

}
elseif(idade >= 18  &&  idade <= 50 && peso <60 ){
    echo"risco medio";
}

else{
    echo "numero invalido";
}*/

/*$pais_01 =  "brasil";
echo match($oais_01)
{

    "brasil  " =>o pais escolhido é  o  brasil",
    "alemanha" => " o pais escolhido é alemanha ,
    "japão" => o pais escolhidoé japão.

    default ;
}*/


/*$idade =  -9;

if($idade <5){
    echo" pessoal não pertence a nenhuma categoria ";
}

elseif($idade >= 5 && $idade<8){
    echo "pessoa pretence a  categoria infatentl";

}
elseif($idade >=8 && $idade < 12){
    echo "pessoa pertence  a categoria juvenil";
}


elseif($idade >=12 && $idade < 17){
    echo"pessoa pretence a categoria adolescente ";
}

elseif($idade >=17 && $idade<=40){
    echo"pessao pertence a categoria adulta";
}
else{
    echo"categoria senior";
};*/

//$nota1 = readline("informe a primeira nota");

//$nota2 = readline("informe a segunda nota ");

//$nota3 = readline("informe a terceira nota");

//$media  =  $nota1 + $nota2 + $nota3 /3;

//exercio 1 (14.03.24)
$nota1 = 10;
$nota2 = 10;
$nota7 = 10;

$media  =  ($nota1 + $nota2 + $nota3 )/3;


if($media <= 4.0){
    echo"aluno reprovado";
}

elseif($media >= 4.0 && $media <6.0){
    echo"aluno aguardando prova substutiva";

}

elseif($media >= 6.0 && $media <9.9){
    echo "aluno aprovado";
}

elseif($media = 10){
    echo"aluno aprovado sem dificuldades";
}

?>
    
</body>
</html>