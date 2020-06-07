<?php

namespace Willgate;

use Psr\Log\LoggerInterface as Logger;

class SomethingProcessor
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function process(): void
    {
        $this->logger->info('処理開始');

        // 何らかの処理

        $this->logger->debug('デバッグログ');

        $this->logger->info('処理完了');
    }
}
