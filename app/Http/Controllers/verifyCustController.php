<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use DB;

class verifyCustController extends Controller
{
    //
    public function verificationProccess($token){
        
      	// get value from databas
    	$user = User::select('email', 'verified', 'email_verification_token')
    		->where('email_verification_token', $token)
			->get();

		//transfer the value
		foreach($user as $userdetail){
			$verified = $userdetail->verified;
			$token_db = $userdetail->email_verification_token;
		}

		//create object to pass on home
		$object = new \stdClass();
		$object->property = 'Here we go';

		// 
		if($token == $token_db){
			if($verified=="no"){
				DB::table('users')
	            ->where('email_verification_token', $token)
	            ->update(['verified' => 'yes', 'email_verified_at' => date("Y-m-d H:i:s")]);

	            return view('page.thankYouRegistration');
			}
			else if($verified=="yes"){
				return 'verified';
			}
		}
		else{
			return 'wrong token';
		}

    }//end of function



    

}//end of class 
