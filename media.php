<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mediaphp.css">
    <title>media php</title>
</head>
<style>
    .verde{
        color: green;
    }
    
    .vermelho{
        color: red;
    }


</style>
<body>
    <form  method="post">
     Nota 1: <input class="int" type="number"  placeholder="coloque uma nota" name="nota1">
        <br>
     Nota 2: <input class="int" type="number" name="nota2" placeholder="coloque outra nota" >
        <br>
            <input id="btn" type="submit" value="Calcular" >
        <br>
    </form>

    <?php 
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $media = intval($nota1 + $nota2)/2;

    if ($media >= 6) {
        echo "<span class='verde'>voce foi aprovado! sua média é:</span> " . $media;
    } elseif ($media < 6 && $media >= 0) {
        echo "<span class='vermelho'>voce foi reprovado sua  média foi:</span> " . $media;
    }

?>
</body>
</html>