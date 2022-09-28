<?php

namespace App\Http\Services;

use App\Models\Contactsupport;
use Illuminate\Support\Facades\Auth;
use App\interfaces\authAdminInterface;
use Illuminate\Support\Facades\Request;

class AuthService implements authAdminInterface
{

    public function authAdmin($request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return  to_route('dashboard');
        }else
        return redirect()->back();
    }

    public function viewLogin()
    {

        return view('login');
    }
    public function dashboard(){
        $messages=Contactsupport::count();
        return view('dashboard',compact('messages'));
    }
}
