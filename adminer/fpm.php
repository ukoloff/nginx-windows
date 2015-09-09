<?php
if(!isset($_COOKIE['adminer_lang']))$_COOKIE['adminer_lang']='en';

function adminer_object()
{
 class myAdminer extends Adminer
 {
  function name()
  {
   return 'Adminer@Karat';
  }

  function loginForm() {
    include(dirname(__FILE__).'/login.php');
  }

  function credentials()
  {
    return array('localhost', $_GET["username"], get_password());
  }

 }
 return new myAdminer;
}

include(dirname(__FILE__).'/adminer.php');
?>
