<?php
  
namespace App\Mail;
  
use Illuminate\Support\Facades\Facade;
  
class MailSenderFacade extends Facade{

    protected static function getFacadeAccessor() { 

        return 'mylibrary'; 
    }
}