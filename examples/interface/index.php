<?php

require __DIR__ . '/vendor/autoload.php';

use Willgate\Log\Logger;
use Willgate\SomethingProcessor;

// 同じディレクトリのapp.logファイルにログ出力
$logger = new Logger(__DIR__ . '/app.log');
$processor = new SomethingProcessor($logger);

$processor->process();
