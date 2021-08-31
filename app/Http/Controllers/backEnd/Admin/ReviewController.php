<?php

namespace App\Http\Controllers\backEnd\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function Review()
    {
        $reviews = Review::all();
    	return view('backend/admin/review/review',compact('reviews'));
    }
    public function ActiveReview($id)
    {
        $data = Review::find($id);
        $data['status'] = 1;
        $insert = $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Successfully Activated',
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
    public function DeactiveReview($id)
    {
        $data = Review::find($id);
        $data['status'] = 2;
        $insert= $data->save();
        if ($insert) {
            $notification = array(
                'message' => 'Successfully Deactivated',
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
    public function DeleteReview($id)
    {
        $data = Review::find($id);
        $insert = $data->delete();
        if ($insert) {
            $notification = array(
                'message' => 'successfully deleted',
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
