<html>
    <head>
        <title>HTML para php</title>
    </head>
    <body>
        <!-- http://localhost/projeto/ -->
        <?php
            $string = "Curso na DIO";
            $numeros = 50;
            $cursos = array("Java", "php", "JavaScript", "React");
            date_default_timezone_set('America/Sao_Paulo');
            $data = date("d/m/Y H:i:s");
        ?>
        
        <h4>Essa é uma variável do tipo String, para implementar uma variável desse tipo utilizamos aspas simples ('' ) ou duplas ("") => $string 
            :
            <?php
            echo $string;
            ?>
         </h4>
         <h4>
            Essa é uma variável do tipo Números/integer
            para implementar essa variável utilizamos 
            somente os números :
            <?php
                echo $numeros;
            ?>
         </h4>
         <h4>
            Essa é uma variável com um array, para implementar um array em
            uma variável utilizamos dessa forma => $array = array("php", "java", "javascript")
            <?php
                print_r ($cursos); //Para chamar o array usa-se o comando print_r e não echo!
            ?>
         </h4>
         <h4>
            Vamos agora implementar uma variável do tipo datas, para implementar a variável com datas
            utilizamos uma função própria do PHP desta forma => $data = date("d/m/Y H:i:s")
            <?php
                print ($data);
            ?>
         </h4>
        
    </body>
</html>