<?php

function checkControllerName(string $name): bool {
    return (bool)preg_match('/[a-z0-9-]+$/', $name);
}