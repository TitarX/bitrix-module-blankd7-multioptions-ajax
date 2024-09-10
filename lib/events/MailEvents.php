<?php

namespace DigitMind\TaskSetter\Events;

use Bitrix\Main\Loader;
use Bitrix\Main\Event;

Loader::includeModule('digitmind.tasksetter');

class MailEvents
{
    public static function onMailMessageNew(Event $event)
    {
        // file_put_contents(__DIR__ . '/mail.txt', print_r($event, true));
    }
}
