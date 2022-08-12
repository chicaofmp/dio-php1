<!-- Operadores -->
<!-- Resumo:
! ; and / && ; OR / || / XOR  -->

<?php
    $bollNEG = !true === false;
    var_dump($bollNEG);

    $bool = true && false;
    var_dump($bool);

    $bool2 = true and false;
    var_dump($bool2);

    $bool2 = (true and false);
    var_dump($bool2);

    $bool3 = true or false;
    var_dump($bool3);

    $bool3 = true || false;
    var_dump($bool3);

    $bollXOR = (5 > 5 xor 6 > 4);
    var_dump($bollXOR);
?>

<!-- Estruturas Condicionais -->

<?php
    $a = 10;
    $b = 25;
    $c = true;
    $d = "Fortaleza";

    // if($a < $b) {
    //     echo "a > b"; 
    // }

    $nota = 7;
    $nota1 = 4;
    $nota2 = 10;
    $nota3 = 6;

    if($nota3 >= $nota) {
        echo "Aluno Aprovado!";
    } else if (($nota3 > $nota1) && ($nota3 < $nota)) {
        echo "Aluno em recuperação!";
    } else {
        echo "Reprovado";
    }

    echo "\nHELLO\n";

    //Operador TERNÁRIO
    
    echo $nota2 >= $nota ? "Success!" : "Failed :(\n";

    //Switch case

    $sorteio = rand(0, 7);
    
    switch ($sorteio) {
        case 0:
            echo "0 Pontos";
            break;
        case 1:
            echo "1 Pontos";
            break;
        case 2:
            echo "2 Pontos";
            break;
        case 3:
            echo "3 Pontos";
            break;
        case 4:
            echo "4 Pontos";
            break;
        case 5:
            echo "5 Pontos";
            break;
        default:
           echo "Default LIMITE!";
            break;
    }
    
    // Declarando ARRAYS:
    
    //0 Forma:

    $motos = array('Kawasaki', 'Ducati', 'Honda', 'Yamaha');
    print_r($motos);
    print_r($motos[1]);


    //1ª Forma:

    $carros = ['Ferrari', 'Porsche', 'BMW', 'Mercedes'];

    print_r($carros);
    print_r($carros[1]);

    //2ª Forma: Array Multidimensional
    $endereco = [
        'CEP' => '60116-220',
        'Número' => '123',
        'Cidade' => 'Fortaleza',
        'Estado' => 'CE',
        'Bairro' => 'Aldeota'
    ];
    print_r($endereco);
    print_r($endereco['CEP']);

    $enderecoPessoas = [
        'pessoa1' => array(
            'CEP' => '60116-220',
            'Número' => '123',
            'Cidade' => 'Fortaleza',
            'Estado' => 'CE',
            'Bairro' => 'Aldeota'
        ),
        'pessoa2' => [
            'CEP' => '20100-333',
            'Número' => '13',
            'Cidade' => 'Maceí',
            'Estado' => 'AL',
            'Bairro' => 'Farol'
        ]
        ];
    print_r($enderecoPessoas);
    print_r($enderecoPessoas['pessoa2']);
    print_r($enderecoPessoas['pessoa2']['Estado']); 

    //Função isset para saber se existe o caminho especificado.
    if(isset($enderecoPessoas['pessoa3']['CEP'])) {  
        print_r($enderecoPessoas['pessoa3']['CEP']);
    } else {
        echo "Chave Inválida";
    }


?>