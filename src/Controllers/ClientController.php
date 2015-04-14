<?php
namespace Controllers;
 
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Controllers\BaseController;
use Silex\Provider\TwigServiceProvider;

class ClientController extends BaseController
{   
    public function index(Request $request, Application $app)
	{
	//	$a = new HomeModel();
        return $app['twig']->render('hello.twig');
    }    
}