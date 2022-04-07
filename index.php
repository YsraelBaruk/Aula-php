<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Batata Ltda.</title>
</head>
<body>
    <?php
        $produto = [
            [
                'categora' => 'computadores',
                'itens' => [
                    'PC Gamer HP',
                    'Notebook Lenovo',
                    'Notebook Sansung',
                    'Asus VivoBook'
                ]
            ],
            [
                'categora' => 'periféricos',
                'itens' => [
                    'Mouse',
                    'Monitor',
                    'Fone de Ouvido',
                    'Teclado',
                    'ReadSet'
                ]
            ]
        ];

        foreach($produto as $categoria){
            echo '<h2>'.$Categoria['categoria'].'</h2>';
            echo '<ul>';
            foreach($categoria['itens'] as $produto){
                echo '<li>'.$produto.'</li>';
            }
            echo '</ul>';
        }

        // for($id = 0; $id < count($produto); $id++){
        //     echo '<p> id: '.$id.' -> '.$produto[$id].'</p>';
        // }
    ?>
    
</body>
</html>