<?php

require __DIR__ . '/vendor/autoload.php';

use Willgate\{ClassA, ClassB};

// 直接requireをしていなくても読み込める
$a = new ClassA();
$b = new ClassB();
