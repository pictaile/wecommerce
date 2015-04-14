<?php
namespace Controllers;
 
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Controllers\BaseControllers;

class BaseController
{
    public function __construct(){
		var_dump('base');
	}
}