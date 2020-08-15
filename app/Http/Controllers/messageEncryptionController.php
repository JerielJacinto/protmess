<?php

// error_reporting( error_reporting() & ~E_NOTICE );

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProtectedMessagesModel;
use DB;

class messageEncryptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        //
    }


    public function secretPage($code){

        $dateTimeNow = date("Y-m-d H:i:s");

        $messageCode = ProtectedMessagesModel::select(
            'name_code',
            'lifespan',
            'limit_view',
            'pass_code',
            'actual_view',
            'status',
            'expire_date',
            'message_code'
            )
        ->where([
            ['link_code', '=', $code],
            // ['limit_view', '=', 'actual_view'],
        ])
        ->get();

        foreach($messageCode as $messageCodeDetail){
            $expireDate = $messageCodeDetail->expire_date;
            $limit_view = $messageCodeDetail->limit_view;
            $actual_view = $messageCodeDetail->actual_view;
            $status = $messageCodeDetail->status;
        }
        
        if($messageCode->isEmpty()){
                    return view('page.unkownLinks');
        }
        else if($expireDate >= $dateTimeNow && $actual_view < $limit_view && $status == 'unread'){
            return view('page.secretLink')->with('messageLinkDetails', $messageCode);
        }

        else if($status == 'burned'){
            // return view('page.expiredLinks');
            return view('page.burnedLinks')->with('messageLinkDetails', $messageCode);
        }

        else if($actual_view >= $limit_view){
            // return view('page.expiredLinks');
            return view('page.readLinks')->with('messageLinkDetails', $messageCode);
        }

        else if($expireDate < $dateTimeNow){
            // return view('page.expiredLinks');
            return view('page.expiredLinks')->with('messageLinkDetails', $messageCode);
        }
        else{
            return view('page.unkownLinks');
        }

    }

    public function messagePage($code){
        $dateTimeNow = date("Y-m-d H:i:s");

        $messageCode = ProtectedMessagesModel::select(
            'message_code',
            'name_code',
            'lifespan',
            'pass_code',
            'limit_view',
            'status',
            'actual_view',
            'expire_date',
            'messages'
            )
        ->where('message_code','=',$code)
        ->where('status','=','unread')
        ->get();

        foreach($messageCode as $messageCodeDetail ){
            $expireDate = $messageCodeDetail->expire_date;
            $limit_view = $messageCodeDetail->limit_view;
            $actual_view = $messageCodeDetail->actual_view;
        }

        $newActual = $actual_view + 1;

        if($expireDate >= $dateTimeNow && $actual_view < $limit_view){
            return view('page.secretMessage')->with('messageLinkDetails', $messageCode);
        }
        else{
            return view('page.expiredMessage');
        }
    }

    public function burnPage($code){
        $dateTimeNow = date("Y-m-d H:i:s");

         $messageCode = ProtectedMessagesModel::select(
            'message_code',
            'name_code',
            'link_code',
            'lifespan',
            'limit_view',
            'status',
            'pass_code',
            'actual_view',
            'expire_date',
            'messages'
            )
        ->where('message_code','=',$code)
        ->get();

        if($messageCode->isEmpty()){
            return view('page.unkownLinks');
        }
        else{
            return view('page.burnMessageConfirm')->with('messageLinkDetails', $messageCode);
        }
        
    }


    public function create()
    {
       
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
       
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

} 
  