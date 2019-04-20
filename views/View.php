<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author taylo
 */
class View {
    
    public $data=[];
    
    public function add($key,$data){
        $this->data[$key]=$data;
    }
    
    public function render($htmlView){
        global $data;
        $data=$this->data;
        include_once($htmlView);
    }
}
