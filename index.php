<?php
require('vendor/autoload.php');

use Cowsayphp\Farm;

$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo '<pre>'.$cow->say("Ohmg I'm a cow!").'</pre>';
$tux = Farm::create(\Cowsayphp\Farm\Tux::class);
echo '<pre>'.$tux->say("Ohmg I'm a tux!").'</pre>';

echo 2+2;
?>