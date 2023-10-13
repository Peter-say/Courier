<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Helpers\FileHelpers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:6048', // Add appropriate image validation rules
            'phone_number' => 'nullable|string|max:255',
            'street_address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Handle the avatar upload
        if ($request->hasFile('avatar')) {
            $avatarPath = FileHelpers::saveImageRequest($request->file('avatar'), 'users/avatar');
            $avatarFileName = basename($avatarPath);
        } else {
            $avatarFileName = $user->avatar;
        }

        // Update the user's profile data
        $user->update([
            'avatar' => $avatarFileName,
            'phone_number' => $request->input('phone_number'),
            'street_address' => $request->input('street_address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'postal_code' => $request->input('postal_code'),
            'country' => $request->input('country'),
        ]);

        return back()->with('success_message', 'Profile updated successfully');
    }
}
