<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Layers\Banners;
//use BannerFactory;

class CustomBanner extends BannerFactory
{
    public function __construct(){
    }
    
    private function _generateCode()
    {
        return 123;
    }
    public function createBanner()
    {
        return 'CustomBanner';
    }
}
