<?php 
class Validator
{
    public static function name($value,$min=1,$max=INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max ;
    }
    public static function email($value)
    {
        return filter_var($value,FILTER_VALIDATE_EMAIL);
    }
    public static function password($value,$min=1,$max=INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max ;
    }
    public static function role($value,$min=1,$max=INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max ;
    }
    public static function title($value,$min=1,$max=INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max ;
    }
    public static function contant($value,$min=1,$max=INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max ;
    }
    public static function user_id($value,$min=1,$max=INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max ;
    }
    public static function categories_id($value,$min=1,$max=INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max ;
    }
    public static function image($value,$min=1,$max=INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max ;
    }
}