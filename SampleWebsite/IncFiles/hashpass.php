<?php

$unhashedPassword = "password";   //$_POST["password"];

$options = [
    'cost' => '12'
];

$hashedPassword = password_hash($unhashedPassword, PASSWORD_BCRYPT, $options);


$loginPassword = "password";

if (password_verify($loginPassword, $hashedPassword)) {
    echo "matching passwords!";
} else {
    echo "invalid credentials!";
}
