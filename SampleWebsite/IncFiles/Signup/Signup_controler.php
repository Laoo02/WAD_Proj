<?php

declare(strict_types=1);

function is_input_empty(string $name, string $username, string $password): bool
{
    if (empty($name) || empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function is_username_taken(object $pdo, string $username)
{
    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $name, string $username, string $password)
{
    set_user($pdo, $name, $username, $password);
}
