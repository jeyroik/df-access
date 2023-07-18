<?php

use deflou\components\access\PluginInstanceAccess;
use deflou\components\plugins\access\PluginApplicationAccess;
use deflou\components\plugins\access\PluginTriggerAccess;
use extas\interfaces\plugins\IPlugin;

return [
    'plugins' => [
        [
            IPlugin::FIELD__CLASS => PluginTriggerAccess::class,
            IPlugin::FIELD__STAGE => 'triggers.create.after'
        ],
        [
            IPlugin::FIELD__CLASS => PluginApplicationAccess::class,
            IPlugin::FIELD__STAGE => 'applications.create.after'
        ],
        [
            IPlugin::FIELD__CLASS => PluginInstanceAccess::class,
            IPlugin::FIELD__STAGE => 'instances.create.after'
        ]
    ]
];
