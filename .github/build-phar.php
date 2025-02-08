#!/usr/bin/env php
<?php

$pharName = $argv[1] ?? '.dev/example-skeleton.phar';
$pharBase = basename($pharName);
$stubName = 'example-skeleton';

$root       = dirname(__DIR__);
$pharFile   = $root . '/' . $pharName;
$stubFile   = $root . '/' . $stubName;
$rootLength = strlen($root) + 1;

if (is_file($pharFile)) { unlink($pharFile); }

$phar = new Phar($pharFile);
$phar->startBuffering();

$compressDirectories = ['vendor' => true, 'template' => false];
foreach ($compressDirectories as $archiveDirectory => $compressPhp) {
    $flags     = FilesystemIterator::SKIP_DOTS | FilesystemIterator::CURRENT_AS_PATHNAME;
    $directory = new RecursiveDirectoryIterator($root . '/' . $archiveDirectory, $flags);
    $flags     = RecursiveIteratorIterator::CHILD_FIRST | RecursiveIteratorIterator::CATCH_GET_CHILD;
    $files     = new RecursiveIteratorIterator($directory, 0, $flags);

    foreach ($files as $filename) {
        $relativeFilename = substr($filename, $rootLength);
        $compressPhp && substr($relativeFilename, -4) === '.php'
            ? $phar->addFromString($relativeFilename, php_strip_whitespace($filename))
            : $phar->addFile($filename, $relativeFilename);
    }
}

$append       = '$rootDirectory = getcwd();';
$stubContents = str_replace("__DIR__ . '", "'phar://$pharBase", file_get_contents($stubFile));
$stubContents = str_replace($append, $append . "\n\\Phar::mapPhar('$pharBase');", $stubContents);

$phar->setStub($stubContents . "\n__HALT_COMPILER();");

$phar->addFile($root . '/LICENSE', 'LICENSE');
$phar->stopBuffering();
$phar->compressFiles(Phar::GZ);

echo 'Generated phar archive: ' . $pharName . ' (' . round(filesize($pharFile) / 1024, 2) . ' KB)' . PHP_EOL;
