<?php

require __DIR__.'/vendor/autoload.php';

use Jkan\Component\Company\Worker;
use Jkan\Component\Company\Boss;

$bob = new Worker('Bob');
$boss = new Boss($bob);
$boss->work();
