<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ProtectedMessagesModel;
use App\User;
use Auth;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class accountController extends Controller
{
    //
    public function index(){

    	$myMessages = ProtectedMessagesModel::select(
    		'sender_id',
    		'lifespan',
    		'expire_date',
    		'recipient',
    		'status',
    		'name_code',
    		'created_at',
    		'message_code',
    		'link_code')
      	->where('sender_id','=',Auth::user()->id)
        ->orderBy('id', 'DESC')
      	->get();

      	if(Auth::user()->verified == 'yes'){
    		return view('accounts.myaccount')->with('myMessages', $myMessages);
      	}
      	else{
	    	return view('accounts.needConfirm');
      	}
    }


    public function verifyResend(){

        $verificationEmail = new \stdClass();
        $verificationEmail->sender = 'Protected Message';
        $verificationEmail->receiver = Auth::user()->email;
        $verificationEmail->name = Auth::user()->name;
        $verificationEmail->token = Auth::user()->email_verification_token;

    	Mail::to(Auth::user()->email)->send(new verificationEmail($verificationEmail));

    	return view('accounts.verifyResend');
    }
}
