<?php

// facade
// 
namespace Rasim\Modal\Facades;

use Illuminate\Support\Facades\Facade;

class Modal extends Facade
{
    
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'modal';
    }
    
}