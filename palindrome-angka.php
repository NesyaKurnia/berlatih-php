<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  $hasil = '';
  $stringAngka = strval($angka);
  $reverseString = '';
  for ($i = strlen($stringAngka) - 1; $i >= 0; $i--) {
      $reverseString .= $stringAngka[$i];
  }
  if ($reverseString == $stringAngka) {
      $angka += 1;
  }
  while (true) {
      $stringAngka = strval($angka);
      $reverseString = '';
      for ($i = strlen($stringAngka) - 1; $i >= 0; $i--) {
          $reverseString .= $stringAngka[$i];
      }
      if ($reverseString == $stringAngka) {
          global $hasil;
          $hasil = $stringAngka . "<br>";
          return $hasil;
      }
      else {
          $angka += 1;
      }
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>