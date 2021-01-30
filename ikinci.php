<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Para Üstü - 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    $para = $_POST['para'];
    $arrParaBirimleri = array(1, 5, 10, 25, 50, 100, 500);
    $arrParaTurkceKarsilik = array(" 1 Kuruş", "5 Kuruş", "10 Kuruş", "25 Kuruş", "50 Kuruş", "1 TL");

    for ($i = 5; $i >= 0; $i--) {
        $sayac = 0;
        while ($para >= $arrParaBirimleri[$i]) {
            $sayac++;
            $para = $para - $arrParaBirimleri[$i];
        }
        if ($sayac > 0) {
            echo $sayac . "tane" . $arrParaTurkceKarsilik[$i];
            echo "<br>";
        }
    }
    ?>
    <A HREF="javascript:javascript:history.go(-1)">Geri dön</A>
    <br />

</body>

</html>