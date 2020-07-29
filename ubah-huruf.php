<?php
function ubah_huruf($string){
//kode di sini
    $alphabet ="abcdefghijklmnopqrstuvwxyz";
    $hasil = "";
    for ($i=0; $i < strlen($string); $i++) {
        $posisi = strpos($alphabet, $string[$i]);
        $hasil .= substr($alphabet, $posisi+1, 1);
    }
    return $hasil;
}

// TEST CASES
echo ubah_huruf('wow') . "<br>"; // xpx
echo ubah_huruf('developer') . "<br>"; // efwfmpqfs
echo ubah_huruf('laravel') . "<br>"; // mbsbwfm
echo ubah_huruf('keren') . "<br>"; // lfsfo
echo ubah_huruf('semangat') . "<br>"; // tfnbohbu

?>