<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{
    function onContactSend(Request $request){
       $name =  $request->input('name');
       $email =  $request->input('email');
       $message =  $request->input('message');

       $result = ContactModel::insert(['name'=>$name, 'email'=>$email, 'message'=>$message]);

       if($result==true){
           return 1;
       } else {
           return 0;
       }
    }
}
