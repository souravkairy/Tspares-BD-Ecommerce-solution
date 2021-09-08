<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionSetting;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $siteSetting = SiteSetting::find(1);
        return view('backend/admin/SiteSetting/siteSetting')->with('siteSetting', $siteSetting);
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
        if ($request->androidAppLink) {
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
        if ($request->shipping_crg) {
            $data['shipping_crg'] = $request->shipping_crg;
        }
        if ($request->freeShippingAmn) {
            $data['freeShippingAmn'] = $request->freeShippingAmn;
        }
        if ($request->OldsusImage) {
            if ($request->file('susImage')) {
                $data['susTextOne'] = $request->susTextOne;
                $data['susTextDescOne'] = $request->susTextDescOne;
                $data['susTextTwo'] = $request->susTextTwo;
                $data['susTextDescTwo'] = $request->susTextDescTwo;
                $data['susTexthree'] = $request->susTexthree;
                $data['susTextDescThree'] = $request->susTextDescThree;
                $file1 = $request->file('susImage')->getClientOriginalName();
                $fileName1 = $file1;
                $path = 'susImage' . "/";
                $destinationPath = $path; // upload path
                $request->file('susImage')->move($destinationPath, $fileName1);
                $data['susImage'] = '/susImage/' . $fileName1;
                $insert = $data->save();
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
            $data['susTextOne'] = $request->susTextOne;
            $data['susTextDescOne'] = $request->susTextDescOne;
            $data['susTextTwo'] = $request->susTextTwo;
            $data['susTextDescTwo'] = $request->susTextDescTwo;
            $data['susTexthree'] = $request->susTexthree;
            $data['susTextDescThree'] = $request->susTextDescThree;
            $data['susImage'] = $request->OldsusImage;
            $insert = $data->save();
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

        $insert = $data->save();
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
    public function section_setting()
    {
        $section_setting = SectionSetting::find(1);
        return view('backend/admin/SiteSetting/sectionSetting')->with('sectionSetting', $section_setting);
    }
    public function update_section_setting(request $request)
    {
        $data = SectionSetting::find(1);

        if ($request->oldimg) {
            if ($request->file('sec1Image')) {
                $data['sec1Text'] = $request->sec1Text;
                $data['sec1catName'] = $request->sec1catName;
                $data['sec1BtnLink'] = $request->sec1BtnLink;
                $file1 = $request->file('sec1Image')->getClientOriginalName();
                $fileName1 = $file1;
                $path = 'sectionImages' . "/";
                $destinationPath = $path; // upload path
                $request->file('sec1Image')->move($destinationPath, $fileName1);
                $data['sec1Image'] = '/sectionImages/' . $fileName1;
                $insert = $data->save();
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
            $data['sec1Text'] = $request->sec1Text;
            $data['sec1catName'] = $request->sec1catName;
            $data['sec1BtnLink'] = $request->sec1BtnLink;
            $data['sec1Image'] = $request->oldimg;
            $insert = $data->save();
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
        if ($request->oldimg2) {
            if ($request->file('sec2Image')) {
                $data['sec2Text'] = $request->sec2Text;
                $data['sec2BtnLink'] = $request->sec2BtnLink;
                $data['sec2Heading'] = $request->sec2Heading;
                $file1 = $request->file('sec2Image')->getClientOriginalName();
                $fileName1 = $file1;
                $path = 'sectionImages' . "/";
                $destinationPath = $path; // upload path
                $request->file('sec2Image')->move($destinationPath, $fileName1);
                $data['sec2Image'] = '/sectionImages/' . $fileName1;
                $insert = $data->save();
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
            $data['sec2Text'] = $request->sec2Text;
            $data['sec2BtnLink'] = $request->sec2BtnLink;
            $data['sec2Heading'] = $request->sec2Heading;
            $data['sec2Image'] = $request->oldimg2;
            $insert = $data->save();
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

        if ($request->oldimg3) {
            if ($request->file('sec3Image')) {
                $data['sec3Text'] = $request->sec3Text;
                $data['sec3BtnLink'] = $request->sec3BtnLink;
                $file1 = $request->file('sec3Image')->getClientOriginalName();
                $fileName1 = $file1;
                $path = 'sectionImages' . "/";
                $destinationPath = $path; // upload path
                $request->file('sec3Image')->move($destinationPath, $fileName1);
                $data['sec3Image'] = '/sectionImages/' . $fileName1;
                $insert = $data->save();
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
            $data['sec3Text'] = $request->sec3Text;
            $data['sec3BtnLink'] = $request->sec3BtnLink;
            $data['sec3Image'] = $request->oldimg3;
            $insert = $data->save();
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

        if ($request->oldimg4) {
            if ($request->file('sec4Image')) {
                $data['sec4Heading'] = $request->sec4Heading;
                $data['sec4Text'] = $request->sec4Text;
                $data['sec4BtnLink'] = $request->sec4BtnLink;
                $file1 = $request->file('sec4Image')->getClientOriginalName();
                $fileName1 = $file1;
                $path = 'sectionImages' . "/";
                $destinationPath = $path; // upload path
                $request->file('sec4Image')->move($destinationPath, $fileName1);
                $data['sec4Image'] = '/sectionImages/' . $fileName1;
                $insert = $data->save();
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
            $data['sec4Heading'] = $request->sec4Heading;
            $data['sec4Text'] = $request->sec4Text;
            $data['sec4BtnLink'] = $request->sec4BtnLink;
            $data['sec4Image'] = $request->oldimg4;
            $insert = $data->save();
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
        if ($request->oldimg5) {
            if ($request->file('sec5Image')) {
                $data['sec5Heading'] = $request->sec5Heading;
                $data['sec5Text'] = $request->sec5Text;
                $data['sec5BtnLink'] = $request->sec5BtnLink;
                $file1 = $request->file('sec5Image')->getClientOriginalName();
                $fileName1 = $file1;
                $path = 'sectionImages' . "/";
                $destinationPath = $path; // upload path
                $request->file('sec5Image')->move($destinationPath, $fileName1);
                $data['sec5Image'] = '/sectionImages/' . $fileName1;
                $insert = $data->save();
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
            $data['sec5Heading'] = $request->sec5Heading;
            $data['sec5Text'] = $request->sec5Text;
            $data['sec5BtnLink'] = $request->sec5BtnLink;
            $data['sec5Image'] = $request->oldimg5;
            $insert = $data->save();
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
        $notification = array(
            'message' => 'error',
            'alert-type' => 'error',
        );
        return Redirect()->back()->with($notification);

    }
}
