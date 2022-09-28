<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\SitInfoRequest;
use App\Models\Siteinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteInfoEditController extends Controller
{
    public function siteInfo()
    {

        $siteinfo = Siteinfo::first();
        $data =  json_decode($siteinfo);
        $links =  $siteinfo['links'];

        $office = $siteinfo['office'];
        $officeMain = $office->mainOffice;
        $officeSection = $office->sectionOffice;
        return view('siteInfo', compact('data', 'links', 'officeMain', 'officeSection'));
    }

    public function updateSiteInfo(SitInfoRequest $request)
    {
        $siteinfo = Siteinfo::first();

        $links = $siteinfo['links'];

        $links->facebook = $request->facebook;
        $links->instagram = $request->instagram;
        $links->youtube = $request->youtube;


        $office = $siteinfo['office'];
        $office->mainOffice->name = $request->mainOfficeName;
        $office->sectionOffice->name = $request->officeSection;

        $siteinfo->update(
            $request->validated() + [
                'links' => $links,
                'office' => $office
            ]
        );
        dd($request->lat);
        return redirect()->back()->with('success', 'تم تعديل البيانات بنجاح');
    }
}
