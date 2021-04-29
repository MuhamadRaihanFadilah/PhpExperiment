<?php

if (isset($_POST["submit"])) :
    $berapa = $_POST["berapa"];

    $P = 1;
    $perunggu = 2 * $P;
    $emas = $perunggu + (3 * $P);
    $paladium = $emas + (2 * $P);
    $rhodium = $perunggu + $emas  + $paladium;


    if ($_POST["logam"] == "perunggu") {
        $jumlah = $perunggu;
    } elseif ($_POST["logam"] == "emas") {
        $jumlah = $emas;
    } elseif ($_POST["logam"] == "paladium") {
        $jumlah = $paladium;
    } else {
        $jumlah = $rhodium;
    }
    $jumlah = $jumlah * $berapa;
    echo ("jumlah perak adalah = " . $jumlah);
?>

    <br>

<?php
    echo (" made by Raihan");
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Berpikir kompotasi</h1>
    <h3>Toko Logam mulia memiliki sistem barter seperti berikut:</h3>
    <p>2 perak = 1 perunggu</p>
    <p>1 perunggu + 3 perak = 1 emas</p>
    <p>1 emas + 2 perak = 1 paladium</p>
    <p>1 perunggu + 1 emas + 1 paladium = 1 rhodium</p>


    <form action="" method="post">
        berapa perak yang di butuhkan untuk membeli :
        <select name="logam" id="logam">
            <?php
            $logam[] = "perunggu";
            $logam[] = "emas";
            $logam[] = "paladium";
            $logam[] = "rhodium";
            foreach ($logam as $mulia) : ?>
                <option value="<?= $mulia; ?>"><?= $mulia; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="number" name="berapa" placeholder="jumlah" required>
        <button type="submit" name="submit">enter</button>
    </form>
</body>

</html>