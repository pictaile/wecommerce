<?php
namespace Models;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Layers\Banners\CustomBanner;
class ClientModel
{
    public function __construct(/*Request */$request) 
    {
        $a = new \Layers\Banners\CustomBanner();
        var_dump($a->createBanner());die;
    }    
}