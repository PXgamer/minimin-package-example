<?php

namespace MiniminPackage\ExamplePackage;

use pxgamer\Minimin\Smarter;

class App
{
    // When initialised by the Minimin class, it will pass the $route to the plugin App constructor
    public function __construct($route)
    {
        // ... Run plugin commands
        $Smarter = Smarter::get();
        $Smarter->addTemplateDir(__DIR__ . '/Templates/');
        $Smarter->display(
            'ExamplePackage\index.tpl',
            [
                'route' => $route
            ]
        );
    }
}