<?php
function generateRandomAlphaNumeric($length = 10, $prefix = '', $type = 'all') {
        $numeric = '0123456789';
        $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
        $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        switch($type) {
            case 'all': $randomChars = $numeric . $lowerCase . $upperCase; break;
            case 'n': $randomChars = $numeric; break;
            case 'lcn': $randomChars = $numeric . $lowerCase; break;
            case 'ucn': $randomChars = $numeric . $upperCase; break;
            case 'lcuc': $randomChars = $lowerCase . $upperCase; break;
            case 'lc': $randomChars = $lowerCase; break;
            case 'uc': $randomChars = $upperCase; break;
            default: $randomChars = $numeric . $lowerCase . $upperCase; break;
        }

        $charsLength = strlen($randomChars)-1;
        $result = $prefix;
        for ($i=0;$i<$length;$i++)
            $result .= $randomChars[mt_rand(0, $charsLength)];
        return $result;
    }

echo generateRandomAlphaNumeric(5);