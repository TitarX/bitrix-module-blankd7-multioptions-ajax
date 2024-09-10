<?php

use Bitrix\Main\Loader;

// При правильном именовании, классы подключаются автоматически
// Имена файлов классов должны быть в нижнем регистре
Loader::registerAutoloadClasses(
    'digitmind.tasksetter',
    [
        'DigitMind\TaskSetter\Events\MailEvents' => 'lib/events/MailEvents.php',
        'DigitMind\TaskSetter\Entities\OptionsTable' => 'lib/entities/OptionsTable.php',
        'DigitMind\TaskSetter\Helpers\MiscHelper' => 'lib/helpers/MiscHelper.php'
    ]
);
