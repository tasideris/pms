<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use Illuminate\Http\Request;

 
class MailServiceController extends Controller {
    //send email
    public function sendEmail(Request $request) {
        
        $req = $request->all();
        Mail::to($req['email'])->send(new Email());
    }
}