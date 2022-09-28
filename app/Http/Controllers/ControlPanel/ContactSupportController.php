<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\Contactsupport;
use Illuminate\Http\Request;

class ContactSupportController extends Controller
{

    public function contactSupportMessage(){
        $messages=Contactsupport::latest()->paginate(10);
        return view('contactSupport',compact('messages'));
    }

}
