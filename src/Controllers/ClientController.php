<?php
namespace Controllers;
 
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Controllers\BaseController;
use Silex\Provider\TwigServiceProvider;

class ClientController extends BaseController
{   
    public function index(Request $request, Application $app)
    {
       $clientModel = new \Models\ClientModel($request); 
       return $app->json($clientModel->getResponse(), 200) ;
    }    
}