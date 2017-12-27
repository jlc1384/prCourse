<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FirstBundle\Twig;

class FilterVista extends \Twig_Extension {
    public function getName() {
        return "filter_vista";
    }
    
    public function getFilters() {
        return array(
          new \Twig_SimpleFilter("addText", array($this, "addText"))
        );
    }
    
    public function addText($string) {
        $patr[0] = '/\-/';
        $patr[1] = '/\*/';
        $ch[0] = ' ';
        $ch[1] = ',';
     
        $ret = preg_replace($patr, $ch, $string);
        return $ret;
    }
}