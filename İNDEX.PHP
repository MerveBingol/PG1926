
<?php
$sayi =6;
$toplam = 0;

for ($i = 1; $i < $sayi; $i++) {

    if ($sayi % $i == 0) {
        $toplam = $toplam + $i;
    }
}

if ($toplam == $sayi) {
    echo $sayi . ".Mükemmel sayidir";
}

?>