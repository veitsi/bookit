<?php
require('../vendor/autoload.php');

use Cowsayphp\Farm;

$rooster = Farm::create(\Cowsayphp\Farm\Rooster::class);
echo '<pre>'.$rooster->say("Ohmg I'm a rooster!").'</pre>';

?>