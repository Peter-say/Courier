<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountSettings extends Controller
{
    public function view()
    {
        return view('dashboard.user.account-settings');
    }

    public function getAccount()
    {
        $user = Auth::user()->id;
        $id = $user;
        return view('dashboard.user.delete-account', compact('id'));
    }

    public function destroy($id, Request $request)
    {
        $user = Auth::user();
        if (Hash::check($request->password, $user->password)) {
            User::findOrFail($id)->delete();
            return redirect()->route('register')->with('success_message', 'You have successfully deleted your account.If you would change you mind to join again, please register new account. Thanks');
        } else {
            return back()->with('error_message', "You can't delete this account because password is incorrect");
        }
    }
}
