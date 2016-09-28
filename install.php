<?php

$package_name = basename(__DIR__);
$class_name = str_replace('-', '', ucwords($package_name, '-'));

//Replace content and rename classes
foreach ([
    '/composer.json',
    '/README.md',
    '/src/Boilerplate.php',
    '/tests/BoilerplateTest.php',
] as $file) {
    $content = file_get_contents(__DIR__.$file);
    $content = str_replace('boilerplate', $package_name, $content);
    $content = str_replace('Boilerplate', $class_name, $content);
    file_put_contents(__DIR__.$file, $content);

    if (strpos($file, 'Boilerplate') !== false) {
        $newFile = str_replace('Boilerplate', $class_name, $file);
        rename(__DIR__.$file, __DIR__.$newFile);
    }
}

//Remove the note in README.md
$file = fopen(__DIR__.'/README.md', 'r');
$note = true;
$content = '';

while (($line = fgets($file)) !== false) {
    if ($note && (!trim($line) || $line[0] === '>')) {
        continue;
    }

    $note = false;
    $content .= $line;
}

file_put_contents(__DIR__.'/README.md', $content);

//Remove the post-create-project-cmd composer script
$composer = json_decode(file_get_contents(__DIR__.'/composer.json'), true);
unset($composer['scripts']['post-create-project-cmd']);
file_put_contents(__DIR__.'/composer.json', json_encode($composer, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

//remove myself
unlink(__FILE__);
