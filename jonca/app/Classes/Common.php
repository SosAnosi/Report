<?php

namespace App\Classes;

class Common {
    
    public static function arrtstr($array)
    {
        $str=NULL;
        foreach($array AS $element)
        {
            $str .= "'".$element . "', ";
        }
        $str = substr($str, 0, -2);
        
        return $str;
    }
}