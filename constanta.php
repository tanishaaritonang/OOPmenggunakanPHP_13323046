<!-- <?php
define('NAMA', 'Tanisha Natalia');//harus diluar

echo NAMA;
echo "<br>";
const UMUR = 32;//didalam class
echo UMUR;
?> -->

<?php
class coba{
    const NAMA = 'Tanisha';
}


echo coba::NAMA;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __LINE__;
echo "<br>";
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;
?>