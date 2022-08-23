<?php
/**
 * Wahyu Rizky Nurhidayat
 * XII RPL 1
 */
echo " <br>";
function volumebalok ($panjang,$lebar,$tinggi) {
    return ($panjang*$lebar*$tinggi);
}
echo " 1.Diketahui P =15, L =12, T =8. Tentukan volume balok tersebut =".volumebalok (15,12,8);
echo " <br>";
function volumekerucut ($jari2,$tinggi) {
    return (1/3*M_1_PI*$jari2*$jari2*$tinggi);
}
echo " 2.Diketahui r =14, t =15. Tentukan volume kerucut tersebut =".volumekerucut (14,15);

?>