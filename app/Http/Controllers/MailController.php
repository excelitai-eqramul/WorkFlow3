<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Exception;
// use Mail;
use PhpParser\Node\Stmt\TryCatch;
class MailController extends Controller
{
   public function index()
   {

$data =[

'subject'=>'Mail From surfside media',
'body'=>'This is for testing mail using gmail'
];

try{

Mail::to('eqramul8@gmail.com')->send(new MailNotify($data));
return response()->json(['Greate check your mail box']);

}catch(Exception $th){

    return response()->json(['Sorry Something went wrong']);
}




   }
}
