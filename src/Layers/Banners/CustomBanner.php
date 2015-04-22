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
    
    private function _generateCode() {
        return rand(100, 999);
    }
    public function createBanner(){   
        $str = '<div style="padding:20px; border:1px solid #e1e1e1;border-radius:5px;position:absolute; width:300px;left:35%;text-align:center;">Ваш код <b>'.$this->_generateCode().'</b></div>';
        return array('html' => $str);
    }
}
