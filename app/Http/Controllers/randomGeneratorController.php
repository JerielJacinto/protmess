<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProtectedMessagesModel;

class randomGeneratorController extends Controller
{
    //
    public function randomLinkString($n){
	    
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		$randomString = ''; 

	  
		    for ($i = 0; $i < $n; $i++) { 
		        $index = rand(0, strlen($characters) - 1); 
		        $randomString .= $characters[$index]; 
            }    

	    return $randomString; 
    }


    public function randomNameString($n){

	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	    $randomString = ''; 
	  
	    for ($i = 0; $i < $n; $i++) { 
	        $index = rand(0, strlen($characters) - 1); 
	        $randomString .= $characters[$index]; 
	            } 
	          

	    return $randomString; 
    }

}
