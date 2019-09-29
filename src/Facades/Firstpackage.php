<?php

namespace Wangbaojin\Firstpackage\Facades;


use Illuminate\Support\Facades\Facade;

class Firstpackage extends Facade
{

	protected static function getFacadeAccessor()
	{
		return 'firstpackage';
	}

}