<?php echo getcwd() . "\n";


$dir = '/challenge/web-serveur/ch20/';
$files1 = scandir($dir);

print_r($files1);

echo "<br><br><br>";



/*$myfile = fopen("/challenge/web-serveur/ch21/.passwd", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);*/


?>
