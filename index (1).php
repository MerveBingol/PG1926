<?php

echo "<br>";
$saat=strtotime("21:15");

if($saat>strtotime("06:00") and $saat< strtotime("10:00")  )
{
    echo "<br>";
    echo "GÜNAYDIN !! <br>";
}else if($saat>strtotime("10:00") and $saat< strtotime("17:00")){

    echo "İYİ GÜNLER !!";
}else if($saat>strtotime("17:00") and $saat< strtotime("20:00"))
{
    echo "İYİ AKŞAMLAR!";
}
else
   echo "İYİ GECELER!";
?>