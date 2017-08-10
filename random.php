<?php
function generateRandomAlphaNumeric($length = 10, $prefix = '') {
    $randomChars = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charsLength = strlen($randomChars)-1;
    $result = $prefix;
    for ($i=0;$i<$length;$i++)
        $result .= $randomChars[mt_rand(0, $charsLength)];
    return $result;
}

echo generateRandomAlphaNumeric(5);