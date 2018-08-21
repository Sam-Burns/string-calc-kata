<?php

require_once __DIR__ . '/../vendor/autoload.php';

$application = new \Symfony\Component\Console\Application();
$command = new StringCalcKata\Command();
$application->addCommands([$command]);
$application->run();
