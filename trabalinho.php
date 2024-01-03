<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício PHP</title>
    </head>

    <body>
        
        <h1>Informação do doador.</h1>

        <?php
            $idade = 16;
            $peso = 75;

            if( ($idade >= 16 && $idade <= 69) && $peso >= 50){
                echo 'Está apto a doar';
            }else {
                echo 'Não está apto a doar';
            }
        
        
        ?>
    </body>
</html>