<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Asal Sayı Bulma-2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <?php
    $sayi = $_POST['sayi'];
    $sayac = 0;
    $asal = 0;
    $i = 2;
    for ($i = 2; $i < $sayi; $i++) {
        if ($sayi % $i == 0) {
            $sayac++;
        }
    }

    if ($sayac == 0) {
        $sonuc = "Sayı Asaldır";
    } else {
        $sonuc = "Sayı Asal Değildir";
    }

    ?>

    <h1>ASAL SAYI BULMA</h1>

    <h1><?php echo $sonuc; ?> </h1>


    <A HREF="javascript:javascript:history.go(-1)">Geri dön</A>
    <br />

</body>

</html>