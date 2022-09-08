<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_us(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $massege = $request->input('massege');
        date_default_timezone_set('Asia/Dhaka');
        $contact_time = date('h:i:sa');
        $contact_date = date("d:m:Y");

      $result =  Contact::insert([
        'name' => $name,
        'email' => $email,
        'massege' => $massege,
        'contact_time' => $contact_time,
        'contact_date' => $contact_date
        ]);
        return $result;
    }
}
