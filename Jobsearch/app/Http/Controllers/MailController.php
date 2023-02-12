<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{
    //
    public function index(){
        
    }

    public function Application(Request $request , $id){

        // $data['details'] = $request->toArray();

        // dd($data['details']);
        // dd($request->toArray());
        $data = [
            'name' => $request->fname,
            'body' => 'Hello This is my email',
            'position' => $request->position,
            'subject' => '.'
        ];
        try {
            Mail::to($request->email)->send(new MailNotify($data));

            Alert::success('Application Successful!', 'Please check your mail.');

            return view('listings.index');

            // return response()->json(['Great check your mail']);
        } catch (Exception $th) {

            // Alert::failed('Application UnSuccessful', '');
            // return response()->json(['Sorry something went wrong!'])

            dd($th);
        }
    }
}
