<?php

function token_generator($cin, $full_name): string
{
    $chars = "A08N1C9Z3X4U5Q6E7N8B9I5O5P4S3D2G1H3J2K4M4W2C4V";
    srand((double)microtime() * 1000000);
    $pass = '';
    $i = 0;
    $name = '';
    $fcin = '';

    while ($i <= 7) {
        $num = rand() % 39;
        $tmp = substr($chars, $num, 2);

        $pass = $pass . $tmp;

        $i++;
    }
    for ($i = 0; $i <= 3; $i++) {
        $name = $name . $full_name[$i];
        $fcin = $fcin . $cin[$i];
    }

    return $name . $pass . $fcin;
}