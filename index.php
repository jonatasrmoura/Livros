<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO-PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once "Livro.php";

            $l = new Livro("Idade Média & Fantasia", "HBO", "Game of Thrones", "George R. R. Martin");
            print_r($l);

            echo "<br/><br/>";

            $l2 = new Livro("Infantil", "Escolar (desconhecida)", "Boo to You Too!", "Elizabeth Rodger");
            print_r($l2);
        ?>
    </pre>
</body>
</html>