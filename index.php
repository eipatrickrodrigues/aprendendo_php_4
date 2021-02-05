<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO em PHP</title>
</head>
<body>
    
    <pre>
    <?php 
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        require_once 'Aluno.php';

        $p1 = new Pessoa('Patrick',24,'Masculino');
        $p2 = new Pessoa("Wesley", 23, 'Masculino');
        print_r($p1);
        print_r($p2);

        $p1 = new Aluno('Ensino médio');
        $p1->setNome('Letícia');
        $p1->setSexo('Feminino');
        $p1->setIdade('16');
        $p1->matricular();
        $p1->cancelarMatricula();
        echo '<hr>';
        $p2 = new Bolsista('Eletrônica');
        $p2->setNome('Iago');
        $p2->setSexo('Masculino');
        $p2->setIdade(20);
        //$p2->matricular();
        //$p2->renovarBolsa('1');
        $p2->pagarMensalidade();
        print_r($p2);

    ?>
    </pre>


</body>
</html>