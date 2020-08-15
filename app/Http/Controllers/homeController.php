<?php

namespace App\Http\Controllers;

use App\ProtectedMessagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('page.home'); 
    }

    public function sentViaEmail($message_name){

        $messageCode = ProtectedMessagesModel::select(
            'name_code',
            'lifespan',
            'limit_view',
            'pass_code',
            'actual_view',
            'status',
            'expire_date',
            'message_code',
            'recipient'
            )
        ->where([
            ['name_code', '=', $message_name],
        ])
        ->get();

        return view('page.messageViaEmailPage')->with('data', $messageCode);
    }
}
