<?php

include_once 'PenyanyiPop.php';
include_once 'PenyanyiRock.php';
include_once 'PenyanyiJazz.php';

function clientCode(Penyanyi $penyanyi) {
    $penyanyi->menyanyi();
}

echo "Penyanyi Pop:\n";
clientCode(new PenyanyiPop());

echo "\nPenyanyi Rock:\n";
clientCode(new PenyanyiRock());

echo "\nPenyanyi Jazz:\n";
clientCode(new PenyanyiJazz());

