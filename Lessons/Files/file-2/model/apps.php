<?php
// JSON - java script object notation
// json_decode - преообразовывает данные из формата json в обычный php объект (массив)

function getApps(): array {
    $lines = file('db/apps.txt');
    $apps = [];
    foreach ($lines as $line) {
        $apps[] = appStrToArr($line);
    }
    return $apps;
}

function appStrToArr($str): array {
    $str = rtrim($str);
    $parts = explode(';', $str);
    return ['dt' => $parts[0], 'name' => $parts[1], 'phone' => $parts[2]];
}

function addApp(string $name, string $phone): bool {
    $dt = date("Y-d-m H:i:s");
    $app = "$dt; $name; $phone\n";
    file_put_contents('db/apps.txt', $app, FILE_APPEND);
    return true;
}