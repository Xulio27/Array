<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

        $array = [
            'quimica' =>
                'Zeca' =>[
                    'Mat'=>[
                        'nota1' =>5,
                        'nota2' =>6
                    ],
                    
                    'port'=>[
                        'nota1' =>5,
                        'nota2' =>7
                    ]

                ]
                
            ]
            
        ];
    
        print_r($array['quimica']['Zeca']['Mat']['nota1']);

        $var = ($array['quimica']['Zeca']['Mat']['nota1']);
        $var2 = ($array['quimica']['Zeca']['Mat']['nota2']);
        $soma =  $var + $var2;

        $media = $soma/2;

        if($media>= 5){
            echo'APROVADO';
        }
    
        else if($media<5 & $media>=3){
            echo'RECUPERAÇÂO SEU BURRO';
        }

        else{
            echo'BOMBO';
        }
    ?>

    <?php
        $array = [
            'nome' => 'Fabio',
            'endereco' => 'Sudene',
            'idade' => '17',
            'cpf' => 'huhjh'
        ];

        $arrayassociativo = [
        'linux',
        'windows',
        'ios'
        ];


        echo '<h2> Count - conta elementos </h2>';

        echo '<pre>';
            echo (count($array));
        echo '</pre>';

        echo '<h2> arrey keys - mostra os indices do arrey keys </h2>';

        echo '<pre>';
            print_r (array_keys($array));
        echo '</pre>';

        echo '<h2> Array values - mostra o valor de cada arrey </h2>';

        echo '<pre>';
            print_r (array_values($arrayassociativo));
        echo '</pre>';

        echo '<h2> in array - busca um item no array </h2>';

        echo '<pre>';
        print_r (in_array('ios', $arrayassociativo));
        echo '</pre>';

    ?>

</body>
</html>

