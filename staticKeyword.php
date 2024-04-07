
<?php 
class contohStatic{
    public static $angka = 1;

    public static function halo(){
        return "halo " . self::$angka++ . " kali.";
    }
}

echo "<br>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();
echo"<hr>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();