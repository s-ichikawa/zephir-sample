namespace Utils;

class Greeting
{
    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function sub($a, $b)
    {
        return $a - $b;
    }

    public static function multi($a, $b)
    {
        return $a * $b;
    }

    public static function div($a, $b)
    {
        return $a / $b;
    }

    public static function inArray(var needle, array arr)
    {
        return in_array(needle, arr);
    }
}