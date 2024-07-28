<?php 

namespace App\Helpers;

class CaeserAllgoritm
{
    public static function encrypt($string, $shift)
    {
        $result = "";
        
        for ($i = 0; $i < strlen($string); $i++) {
            $char = $string[$i];
            
            if (ctype_upper($char)) {
                $result .= chr((ord($char) + $shift - 65) % 26 + 65);
            } elseif (ctype_lower($char)) {
                $result .= chr((ord($char) + $shift - 97) % 26 + 97);
            } else {
                $result .= $char;
            }
        }
        
        return $result;
    }

    public static function decrypt($string, $shift)
    {
        return self::encrypt($string, 26 - $shift);
    }
}
