<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\Siteinfo;
use Illuminate\Http\Request;

class SiteInfoEditController extends Controller
{
    public function siteInfo()
    {
        $siteinfo = Siteinfo::first();
        $data =  json_decode($siteinfo);
        $links = $siteinfo['links'];
        $office = $siteinfo['office'];
        $officeMain = $office->mainOffice;
        $officeSection = $office->sectionOffice;
        return view('siteInfo', compact('data', 'links', 'officeMain', 'officeSection'));
    }

    public function updateSiteInfo(){

    }
}
