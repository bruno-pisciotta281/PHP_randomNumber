<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Número aleatório</title>
</head>
<body>
    <main>
        <h1>Gerador de Número Aleatório</h1>
        <p>De 0 a 100</p>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo "<p>Seu número aleatório foi: <strong>$num!</strong></p>";
        ?>
        <a href="index.php"><button>Gerar um Novo Número!</button></a>
    </main>
</body>
</html>