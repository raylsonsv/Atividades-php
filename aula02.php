<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Aprendendo PHP</h1>

    <?php
    // Esse é um comentario de uma linha
    # Posso utilizar hashtag para comentario
    /**
     * Aqui é um bloco de conetário
     * Posso escrever em mais de uma linha
     */
    echo "Aqui aparece um texto na tela do usuário";
     //Podemos colocar uma tag HTML dentro do app
     
     echo "<h1>Esse é um titulo</h1>";
     echo "<p>Parágrafo do texto</p>";
     
     //Comandos de saúde:
     //echo - Imprime algo na tela
     //print - Imprime algo na tela
     print "<p> Texto dentro do print</p>";
     
     //Variáveis no PHP
     //Sempre iniciam com $ seguido com o nome da variavel desejada
     //nao w necessario indentificar o tipo de variavel
     //Para criar uma variavel basta atribuir o valor a ela

     $nome = "ray";
     $altura = 1.83;
     $idade = 17;
     echo "$nome tem $altura e tem $idade anos";

    //Aritimetica Basica
     $a = 10;
     $b = 5;
     $c = $a + $b;
     echo "a soma de $a e $b é igual a $c<br>";

     $c = $a - $b;
     echo "a subtração de $a e $b é igual a $c<br>";

     $c = $a * $b;
     echo "a multiplicação de $a e $b é igual a $c<br>";
    
     $c = $a / $b;
     echo "a divisão de $a e $b é igual a $c<br>";
     
     $c = $a % $b;
     echo "o resto da divisão de $a e $b é igual a $c<br>";

     $c = $a ** $b;
     echo "a potencia de $a e $b é igual a $c<br>";

     
     ?>

</body>
</html>