<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function edit()
    {
        $id = Auth::user()->id;

        $edit_user = User::find($id);

        return view("Admin/Profile/profile",["edit_user" => $edit_user]);
    }

    public function update(Request $request , $id)
    {
        $update_user = User::find($id);

        $update_user->full_name = $request->full_name;
        $update_user->mobile_no = $request->mobile_no;

        $update_user->update();

        return redirect("profile");
    }



    public function update_password(Request $request)
    {
        $current_password = Hash::make($request->current_password);

        $select_password = User::where("password",$current_password)->where("id",Auth::user()->id);

        if($request->new_password == $request->confirm_password)
        {
            $id = Auth::user()->id;

            $update_password = User::find($id);

            $update_password->password = Hash::make($request->new_password);

            $update_password->update();

            return redirect("change-password");
        }
        else
        {
            echo "<script>alert('Password Not Matched');</script>";
            return view("Admin/ChangePassword/change_password");
        }
        
    }
}
