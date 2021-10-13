<?php
namespace TimeShow\IpLocation\Facades;

use Illuminate\Support\Facades\Facade;

class IpLocation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'IpLocation';
    }
}