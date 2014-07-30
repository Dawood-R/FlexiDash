<?php

class Security extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function make_hash(){
   $password = "hello";
   $safe_pass = $this->awesome_unbreakable_super_mega_hash($password);
   echo $safe_pass;
   
   function awesome_unbreakable_super_mega_hash($password) {
       $new_pass = $password.="bla";
       return $new_pass;
   }
}

}