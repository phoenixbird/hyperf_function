<?php

use Chaoji\Hyperf\Utils\Log;

function debug_log(...$args)
{
    Log::getInstance()->debug(__METHOD__, $args);
}