<?php

declare(strict_types=1);

namespace App\Core;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
        $router
            ->withModule('Whalebone')
            ->addRoute('whalebone/device/<id>/update', 'DeviceModule:Device:update')
            ->addRoute('whalebone/device/<id>/delete', 'DeviceModule:Device:delete')
            ->addRoute('whalebone/device/<action>', 'DeviceModule:Device:default')
            ->addRoute('whalebone/device-owner/<id>/update', 'DeviceModule:DeviceOwner:update')
            ->addRoute('whalebone/device-owner/<id>/delete', 'DeviceModule:DeviceOwner:delete')
            ->addRoute('whalebone/device-owner/<id>/devices', 'DeviceModule:DeviceOwner:devices')
            ->addRoute('whalebone/device-owner/<action>', 'DeviceModule:DeviceOwner:default');
		return $router;
	}
}
