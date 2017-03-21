<?php

namespace MiniminPackage\ExamplePackage;

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
            'app_namespace' => '\\MiniminPackage\\ExamplePackage', // The namespace of the plugin
            'name' => 'Example Package', // The name of the plugin, may contain spaces
            'link' => 'example', // The link that will be used (e.g. `cron-tasks` will be `/cron-tasks`)
            'description' => 'An example package for Minimin.' // The description of the plugin
        ];
        
        return $object;
    }
}