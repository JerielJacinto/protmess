<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Redirect;
use App\ProtectedMessagesModel;
use Illuminate\Support\Str;
use App\Mail\messageToMail;
use Illuminate\Support\Facades\Mail;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class ajaxController extends Controller
{

  // declaration of class var
  protected $dateNow;

  protected $timeNow;

  protected $dateTimeNow;

  public function __construct(){

    $this->dateNow = date("Y-m-d");

    $this->$timeNow = date("H:i:s");

    $this->$dateTimeNow = date("Y-m-d H:i:s");

  }

    //
    public function post(Request $request){

      $message= $request->input('message');
      $lifespan= $request->input('lifespan');
      $secretCode= $request->input('secretCode');
      $emailRecipient= $request->input('emailRecipient');


      //getting random object
      $randomGenerator = new randomGeneratorController;

      //getting the random code for link
      $randomLinkString = $randomGenerator->randomLinkString(31);

      //getting the random code for message
      $randomMessageString = $randomGenerator->randomLinkString(31);

      //getting the random name
      $randomName = $randomGenerator->randomNameString(8);

      //encryption of message
      $encryptedMessage = Crypt::encryptString($message);

      //get the expiration date
      $expiration = $this->getExpireDate($lifespan);

      //data to save
      $dataToSave = array('messages'=>$encryptedMessage,
        'lifespan'=>$lifespan,
        'sender_id'=>Auth::user()->id,
        'pass_code'=>$secretCode,
        'recipient'=> $emailRecipient,
        'link_Code'=>$randomLinkString,
        'message_code'=>$randomMessageString,
        'Name_code'=>$randomName,
        'expire_date'=>$expiration,
        'limit_view'=>'1',
        'created_at'=>date("Y-m-d H:i:s")

      );
       
      try{

        //saveing
        DB::table('protected_messages')->insert($dataToSave);
                  //check if the email recipient has value
        if($emailRecipient==""){
          return 'success|'.$randomLinkString;
        }
        else{

          $data1 = new \stdClass();
          $data1->message_code = $randomMessageString;
   
          Mail::to($emailRecipient)->send(new messageToMail($data1));
        

          return 'sent|'.$randomName;
          // return Redirect::to('/sent/'.$randomName);

        }

          // return $dataFeature; 
      }
      catch(\Exception $e){
         // do task when error
         return $e->getMessage();   // insert query
      }


   }//end of function


   public function getExpireDate($lifespan){

    $expireDate = "2020-01-01 01:01:01";

    $dateTimeNow = date("Y-m-d H:i:s");

      switch ($lifespan) {
        case '14d':
           $expireDate = date('Y-m-d H:i:s',strtotime('+14 days',strtotime($dateTimeNow)));
           return $expireDate;
        break;

        case '10d':
           $expireDate = date('Y-m-d H:i:s',strtotime('+10 days',strtotime($dateTimeNow)));
           return $expireDate;
        break;

        case '7d':
           $expireDate = date('Y-m-d H:i:s',strtotime('+7 days',strtotime($dateTimeNow)));
           return $expireDate;
        break;
          
        case '3d':
           $expireDate = date('Y-m-d H:i:s',strtotime('+3 days',strtotime($dateTimeNow)));
           return $expireDate;
        break;
          
        case '1d':
           $expireDate = date('Y-m-d H:i:s',strtotime('+1 day',strtotime($dateTimeNow)));
           return $expireDate;
        break;
          
        case '12h':
           $expireDate = date('Y-m-d H:i:s',strtotime('+12 hours',strtotime($dateTimeNow)));
           return $expireDate;
        break;
          
        case '5h':
           $expireDate = date('Y-m-d H:i:s',strtotime('+5 hours',strtotime($dateTimeNow)));
           return $expireDate;
        break;
          
        case '2h':
           $expireDate = date('Y-m-d H:i:s',strtotime('+2 hours',strtotime($dateTimeNow)));
           return $expireDate;
        break;
          
        case '1h':
           $expireDate = date('Y-m-d H:i:s',strtotime('+1 hours',strtotime($dateTimeNow)));
           return $expireDate;
        break;
        
        default:
          return $expireDate;
          break;
      }


   }//end of function


   public function revealMessage(Request $request){

      //get the post
      $message_code= $request->input('hiddenID');
      $passcode= $request->input('passcode');

      // get the message
      $messageCode = ProtectedMessagesModel::select(
          'message_code',
          'pass_code',
          'status',
          'actual_view',
          'messages'
          )
      ->where('message_code','=',$message_code)
      ->where('status','=','unread')
      ->get();

      //transfer the data from database to variable
      foreach($messageCode as $messageCodeDetail ){
            $actual_view = $messageCodeDetail->actual_view;
            $actual_passcode = $messageCodeDetail->pass_code;
        }

      //check if the passcode was matched
      if($actual_passcode == $passcode){

        // increase actual view
        $newActual = $actual_view + 1;

        // add 1 view
        DB::table('protected_messages')
            ->where('message_code', $message_code)
            ->update(['actual_view' => $newActual, 'status'=>'read', 'messages' => 'eyJpdiI6ImxtdHlrWWRcL2NHOFRVeXBQTGlCdCtnPT0iLCJ2YWx1ZSI6IkNHVmc2YXhcL0UyTmhYbjF6SHBQTmpnPT0iLCJtYWMiOiI1YzI2ZjBmZjQ5MGI3NWFkNmUwYjg5OWIzYjNjNzkyZDIzNGVhMDBjOWIwNmY1M2ZmODRhZmI5ZjZiNDEwMmVjIn0=']);

        // return $message_code;
        return view('ajaxPart.messageRevealAjax')->with('messageCode', $messageCode)->render();
      }
      else{
        return "wrong-passcode";
      }
   }// end of function

   public function burnMessageAjax(Request $request){

     //get the post
      $link_code= $request->input('hiddenID');
      $passcode= $request->input('passcode');

      // get the message
      $messageCode = ProtectedMessagesModel::select(
          'pass_code',
          'status'
          )
      ->where('link_code','=',$link_code)
      ->where('status','=','unread')
      ->get();

      foreach($messageCode as $messageCodeDetail ){
            $actual_passcode = $messageCodeDetail->pass_code;
        }

      if($actual_passcode == $passcode){

      //add 1 view
        DB::table('protected_messages')
            ->where('link_code', $link_code)
            ->update(['status' => 'burned']);

        return $link_code;
      }
      else{
       return "wrong-passcode";
      }
      // return view('ajaxPart.messageRevealAjax')->with('messageCode', $messageCode)->render();
      // return Redirect::to('/secret/'.$link_code);

   }// end of function


  public function updateInfo(Request $request){

    $hiddenID = $request->input('hiddenID');
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $passwordconfirm = $request->input('passwordconfirm');
    $comp = $request->input('comp');

    $dataToUpdate = array('id' => $hiddenID);

// $dataToUpdate = array_add($dataToUpdate, 'name', $name);

    if($name != ""){
      $dataToUpdate = array_add($dataToUpdate, 'name', $name);
    }
    if($email != ""){
      $dataToUpdate = array_add($dataToUpdate, 'email', $email);
    }
    if($password != ""){
      $dataToUpdate = array_add($dataToUpdate, 'password', Hash::make($password));
    }
    
    if($comp != ""){
      $dataToUpdate = array_add($dataToUpdate, 'company', $comp);
    }


    DB::table('users')
      ->where('id', $hiddenID)
      ->update($dataToUpdate);

    return $dataToUpdate;

  }



  public function contactUsPost(Request $request){

    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');
      
      // return back()->with('success', 'Thanks for contacting us!');
      return 'Thanks for contacting us';

      // return Redirect::to('/contactus')->with('success', 'Thanks for contacting us!');
    }

}//end of class

