<?php

namespace App\Http\Controllers\ControlPanel;

use Illuminate\Http\Request;
use App\Http\Requests\AuthAdminRequest;
use App\Http\Services\AuthService;
use App\Http\Controllers\Controller;
use App\Models\Contactsupport;
use App\Models\Sliders;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $adminAuth;
    public function __construct(AuthService $adminService)
    {
        $this->adminAuth = $adminService;
    }

    public function login()
    {

        return $this->adminAuth->viewLogin();
    }


    public function authAdmin(AuthAdminRequest $request)
    {
        return $this->adminAuth->authAdmin($request);
    }
    public function dashboard(){

        return $this->adminAuth->dashboard();
    }
}
