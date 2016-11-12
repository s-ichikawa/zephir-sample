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

    public static function arr_reverse(array arr)
    {
        return arr->reversed();
    }

    public static function array_echo(array arr)
    {
        var value;
        for value in arr {
            echo value;
        }
    }
}