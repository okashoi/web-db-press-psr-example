<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Willgate\SomethingProcessor;

// 同じディレクトリのapp.logファイルにログ出力
$handler = new StreamHandler(__DIR__ . '/app.log');
$logger = new Logger('my_logger');
$logger->pushHandler($handler);
$processor = new SomethingProcessor($logger);

$processor->process();
