<?php

require 'vendor/autoload.php';

use DogsTest\ShibaInu;
use DogsTest\Pug;
use DogsTest\Dachshund;
use DogsTest\PlushLabrador;
use DogsTest\RubberDachshund;

if ($argc != 3) {
    echo "Usage: php program.php <dog_type> <action>\n";
    exit(1);
}

$dogType = $argv[1];
$action = $argv[2];

switch ($dogType) {
    case 'shibainu':
        $dog = new ShibaInu();
        break;
    case 'pug':
        $dog = new Pug();
        break;
    case 'dachshund':
        $dog = new Dachshund();
        break;
    case 'plushlabrador':
        $dog = new PlushLabrador();
        break;
    case 'rubberdachshund':
        $dog = new RubberDachshund();
        break;
    default:
        echo "Unknown dog type.\n";
        exit(1);
}

if ($action === 'sound') {
    echo $dog->makeSound() . "\n";
} elseif ($action === 'hunt') {
    echo $dog->hunt() . "\n";
} else {
    echo "Unknown action.\n";
    exit(1);
}



