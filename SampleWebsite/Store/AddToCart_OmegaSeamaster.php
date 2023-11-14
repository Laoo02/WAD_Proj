<?php

require_once '../IncFiles/config.php';
require_once '../IncFiles/dbh.php';
require_once 'AddToCart.php';
require_once 'ShowOrder.php';


$name = "Omega Seamaster";

addToCart($pdo, $name);
