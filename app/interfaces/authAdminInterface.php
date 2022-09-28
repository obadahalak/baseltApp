<?php

namespace App\interfaces;

interface authAdminInterface
{


    public function viewLogin();

    public function  authAdmin($request);

    public function dashboard();
}
