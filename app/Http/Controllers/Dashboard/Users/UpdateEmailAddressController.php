<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateEmailAddressController extends Controller
{

    public function changeEmail()
    {
        $user = Auth::user();
        return view('dashboard.user.edit-email-address', compact('user'));
    }
    public function updateEmail(Request $request, $id)
    {
        $user = Auth::user();
        if (Hash::check($request->password, $user->password)) {
            $request->validate(['email' => 'email|required|unique:users']);
            if ($request->email == $user->email) {
                return back()->with('error_message', ' Email has already been requestered by you');
            } else {
                User::findOrFail($id)->update(['email' => $request->email]);
            }
            return back()->with('success_message', 'Email updated successfully');
        } else {
            return back()->with('error_message', "You can't change this email address because password is incorrect");
        }
    }
}
