<?php
namespace Models;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \Layers\Banners\CustomBanner;
class ClientModel
{
    private $banner;
    public function __construct(Request $request){
        $this->banner = new \Layers\Banners\CustomBanner();
    }  
    
    public function getResponse(){
        return $this->banner->createBanner();
    }
    
}