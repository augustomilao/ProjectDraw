<?php

$Temas = [
        'Avião',
        'Aliens',
        'Historia Alternativa',
        'Negócios',
        'Cidades',
        'Comédia',
        'Cyberpunk',
        'Dança',
        'Detetive',
        'Dungeon',
        'Evolução',
        'Fantasia',
        'Fashion',
        'Game Dev',
        'Governo',
        'Hacking',
        'História',
        'Horror',
        'Caça',
        'Hospital',
        'Lei',
        'Vida',
        'Artes Marciais',
        'Medieval',
        'Militar',
        'Filmes',
        'Musica',
        'Mistério',
        'Ninja',
        'Pirata',
        'Pós Apocalipse',
        'Prisão',
        'Corrida',
        'Ritmo',
        'Romance',
        'Escola',
        'Sci-fi',
        'Espaço Sideral',
        'Sports',
        'Espião',
        'Heróis',
        'Cirurgia',
        'Viagem Temporal',
        'Transporte',
        'UFO',
        'Vampiro',
        'Pet Virtual',
        'Vocabulário',
        'Lobisomen',
        'Velho Oeste',
        'Zumbis'
];
sort($Temas);
$randomTopico = rand(0, (count($Temas) - 1));

$Estilos = [
        'Rogue Like',
        'Shooter',
        'Infinite Runner',
        'Infinite Jumper',
        'Tower Defense',
        'Survival Horror',
        'Hack and Slash',
        'Battle Royale',
        'Jogos de Cartas Colecionáveis'
];
sort($Estilos);
$randomEstilo = rand(0, (count($Estilos) - 1));

$Plataformas = [
        'Mobile',
        'PC'
];
$randomPlataforma = rand(0, (count($Plataformas) - 1));


?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sorteio de Projeto</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
</head>

<body>
        <div style="text-align: center;">
                <h1>Sorteio de Projeto</h1>
        </div>
        <section id="desktop">
                <div class="painel">
                        <div class="opcao">
                                <p class="titulo">Tema</p>
                                <img src="imgs/theme.png" alt="tema_imagem">
                                <p id="sorteio">O sorteado foi:</p>
                                <span><?= $Temas[$randomTopico] ?></span>
                        </div>

                        <div class="opcao">
                                <p class="titulo">Estilo</p>
                                <img src="imgs/style.png" alt="estilo_imagem">
                                <p id="sorteio">O sorteado foi:</p>
                                <span><?= $Estilos[$randomEstilo] ?></span>
                        </div>

                        <div class="opcao">
                                <p class="titulo">Plataforma</p>
                                <img src="imgs/platform.png" alt="plataforma_imagem">
                                <p id="sorteio">O sorteado foi:</p>
                                <span><?= $Plataformas[$randomPlataforma] ?></span>
                        </div>

                </div>
        </section>

</body>

</html>