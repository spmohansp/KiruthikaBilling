<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile(){
        $Profile = Admin::findorfail(auth()->user()->id);
        return view('admin.profile.profile',compact('Profile'));
    }

    public function EditProfile(){
        $Profile = Admin::findorfail(auth()->user()->id);
        return view('admin.profile.edit',compact('Profile'));
    }

    public function updateProfile(Request $request){
        $request->validate([
            'email' => 'required',
            'company_name' => 'required',
            'address' => 'required',
            'mobile' => 'required|min:10|max:10',
            'bill_prefix' => 'required',
            'bill_start_number' => 'required',
            'bank_account' => 'required',
            'logo' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);

        $Profile = Admin::findorfail(auth()->user()->id);
        if (!empty(request('logo'))){
            $file = $request->file('logo');
            $Filename = time().'.' . $file->getClientOriginalExtension();
            $request->file('logo')->move("logo/", $Filename);
            $Profile->logo = '/logo/'. $Filename;
        }
        $Profile->email = request('email');
        $Profile->logo_text = request('logo_text');
        $Profile->company_name = request('company_name');
        $Profile->address = request('address');
        $Profile->mobile = request('mobile');
        $Profile->bill_prefix = request('bill_prefix');
        $Profile->bill_start_number = request('bill_start_number');
        $Profile->bank_account = request('bank_account');
        $Profile->gst = request('gst');
        $Profile->pan = request('pan');
        $Profile->save();
         return back()->with('success','Profile Updated Sucessfully!!');
    }
}
