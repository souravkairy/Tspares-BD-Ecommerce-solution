<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SiteSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $siteSetting = SiteSetting::find(1);
        return view('backend/admin/siteSetting/siteSetting')->with('siteSetting',$siteSetting);
    }
    public function update_setting(request $request)
    {
        $data = SiteSetting::find(1);
        if ($request->mobile) {
            $data['mobile'] = $request->mobile;
            $data['email'] = $request->email;
        }
        if ($request->facebook) {
            $data['facebook'] = $request->facebook;
            $data['twitter'] = $request->twitter;
            $data['linkdein'] = $request->linkdein;
            $data['youtube'] = $request->youtube;
        }
        if ($request->reg_number) {
            $data['reg_number'] = $request->reg_number;
            $data['address'] = $request->address;
            $data['bankDetails'] = $request->bankDetails;
        }
        if ( $request->androidAppLink) {
            $data['androidAppLink'] = $request->androidAppLink;
            $data['iosAppLink'] = $request->iosAppLink;
        }

        $data['status'] = 1;
        if ($request->file('siteLogo')) {
            $fileNameone = $request->file('siteLogo')->getClientOriginalName();
            $fileName1 = $fileNameone;
            $path = 'siteLogo' . "/";
            $destinationPath = $path; // upload path
            $request->file('siteLogo')->move($destinationPath, $fileName1);
            $data['siteLogo'] = '/siteLogo/' . $fileName1;
        }
        $insert = $data ->save();
        if ($insert) {
            $notification = array(
                'message' => 'successfull',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'error',
                'alert-type' => 'error',
            );
            return Redirect()->back()->with($notification);
        }
    }
}
