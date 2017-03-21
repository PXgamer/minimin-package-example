<?php

namespace MiniminPlugins\ExamplePlugin;

class Plugin
{
    public static function info()
    {
        /** This function MUST return the following values:
         *  - app_namespace
         *  - name
         *  - link
         *  - description
         */
        
        $object = (object)[
            'app_namespace' => '\\MiniminPlugins\\ExamplePlugin', // The namespace of the plugin
            'name' => 'Cron Tasks', // The name of the plugin, may contain spaces
            'link' => 'cron-tasks', // The link that will be used (e.g. `cron-tasks` will be `/cron-tasks`)
            'description' => 'A cron task manager for servers.' // The description of the plugin
        ];
        
        return $object;
    }
}