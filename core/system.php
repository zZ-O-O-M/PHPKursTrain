<?php

function checkControllerName(string $name): bool {
    return (bool)preg_match('/[a-z0-9-]+$/', $name);
}

function template(string $path, array $vars = []): string {
    $systemTemplateRenderInfoFullPath = "views/$path.php";
    extract($vars);
    ob_start();
    include($systemTemplateRenderInfoFullPath);
    return ob_get_clean();
}