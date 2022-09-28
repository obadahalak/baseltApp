<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Models\Contactsupport;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactSupportRequest;

class ContactSupportController extends Controller
{
    public function sendMessage(ContactSupportRequest $request)
    {
       $send=Contactsupport::create($request->validated());
        return redirect()->back()->with('success','تم ارسال الرسالة بنجاح');

    }
}
