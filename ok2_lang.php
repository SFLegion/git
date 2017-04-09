<?php echo getcwd() . "\n";


$dir = '/challenge/web-serveur/ch13/';
$files1 = scandir($dir);

print_r($files1);

echo "<br><br><br>";



$myfile = fopen("/challenge/web-serveur/ch13/index.php", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);


?>
