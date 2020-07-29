<?php

function papan_catur($angka) {
// tulis kode di sini
    $text = '';
    $jumlah = "";
    $text .= '<table border=1>';
    for($i = 0; $i<4; $i++) {
        $text .= '<tr>';
        for($j = 0; $j<4; $j++) {
            $color = '';
            if(($i %2 == 0 && $j %2 == 0) || ($i %2 == 1 && $j %2 == 1)) {
                $color = '#000';
            }
            else $color = '#fff';
            $text .= '<td width=30 height=30 bgcolor='.$color.'></td>';
        }
        $text .= '</tr>';
    }
    $text .= '</table>';
}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/