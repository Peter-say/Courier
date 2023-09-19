<?php

namespace App\Services;

use App\Helpers\FileHelpers;
use App\Mail\UserLoginDetailsMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Exception;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UsersService
{

    public function validateUser(Request $request, $id)
    {
        // Validate user input
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email,' . ($id ? $id : 'NULL'),
            'role' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'street_address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
        ]);
    }


    public function createUser(Request $request, $id = null)
    {
        $this->validateUser($request, $id);
        try {
            // Handle file upload for avatar
            $avatarFileName = null;
            if ($request->hasFile('avatar')) {
                $avatarPath = FileHelpers::saveImageRequest($request->file('avatar'), 'users/avatar');
                $avatarFileName = basename($avatarPath);
            }

            // Generate a random password
            $randomPassword = Str::random(12);

            $user = new User();
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->role = $request->input('role');
            $user->password = Hash::make($randomPassword);
            $user->avatar = $avatarFileName;
            $user->street_address = $request->input('street_address');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->postal_code = $request->input('postal_code');
            $user->country = $request->input('country');
            $user->phone_number = $request->input('phone_number');
            $user->email_verified_at = Carbon::now();
            $user->save();

            $this->sendLoginDetails($user->id);

            // Redirect with a success message
            return redirect()->route('dashboard.user.index')->with('success_message', 'User created successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'An error occurred while creating the user.' . $e->getMessage());
        }
    }


    public function updateUser(Request $request, $id)
    {

        try {

            // Validate the form data
            $this->validateUser($request, $id);

            // Find the user by ID
            $user = User::findOrFail($id);

            $avatarFileName = $user->avatar;
            if ($request->hasFile('avatar')) {
                $avatarPath = FileHelpers::saveImageRequest($request->file('avatar'), 'users/avatar');
                $avatarFileName = basename($avatarPath);
            }

            if ($request->input('email') !== $user->email) {
                $user->email = $request->input('email');
            }
            // Update the user's information
            $user->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'role' => $request->input('role'),
                'avatar' => $avatarFileName,
                'street_address' => $request->input('street_address'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'postal_code' => $request->input('postal_code'),
                'country' => $request->input('country'),
                'phone_number' => $request->input('phone_number'),
            ]);

            // Redirect with a success message
            return redirect()->route('dashboard.user.index')->with('success_message', 'User updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()->with('error_message', 'An error occurred while updating the user.' . $e->getMessage());
        }
    }



    public function sendLoginDetails($userId)
    {
        $user = AuthUser::findOrFail($userId);

        $randomPassword = Str::random(12);

        $user->password = Hash::make($randomPassword);
        $user->save();

        Mail::to($user->email)->send(new UserLoginDetailsMail($user, $randomPassword));

        return $user;
    }
}
