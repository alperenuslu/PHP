<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>
<form action="index.php" method="get">
    <label for="number">Sayı Giriniz:</label>
    <input type="number" name="number">
    <input type="submit" value="Gönder">
</form>
</body>
</html>
<?php
function ucunkati($number)
{
    $r = $number % 3;
    if ($r == 0) {
        return "Girilen sayı: " . $number;
    } else {
        return "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı " . $number + (3 - $r) . "'dir.";
    }
}
if (!empty($_GET["number"])) {
    echo ucunkati($_GET["number"]);
} else echo "Boş değer girdiniz.";
