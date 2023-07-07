<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>


    <p>
    <?php 

    $n = $_REQUEST["num"] ?? 0;
    $a = $n - 1;
    $s = $n + 1;
    echo "O número escolhido foi $n";
    echo "<br> O seu antecessor é $a";
    echo "<br> O seu sucessor é $s";
   
    ?>
    <button onclick="javascript:window. location.href='index.html'">&#x2B05;
    Voltar</button>


    </p>
    </main>
</body>
</html>