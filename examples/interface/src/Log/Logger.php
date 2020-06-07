<?php

namespace Willgate\Log;

use Psr\Log\LoggerTrait;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    use LoggerTrait;

    private $logFilePath;

    public function __construct(string $logFilePath)
    {
        // ログファイルの場所を設定
        $this->logFilePath = $logFilePath;
    }

    public function log(
        $level,
        $message,
        array $context = []
    ) {
        // ログレベルとメッセージをタブ区切りで出力
        file_put_contents(
        $this->logFilePath,
        sprintf("%s\t%s\n", $level, $message),
        FILE_APPEND
        );
    }
}
