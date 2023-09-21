<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Constants\StatusConstants;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UsersService as ServicesUsersService;
use App\Services\UsersService\UsersService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    public function index()
    {
        if (in_array(Auth::user()->role, ['Sudo'])) {
            $users = User::all();
            return view('dashboard.users.index', [
                'users' => $users
            ]);
        } else {
            abort(403, 'You do not have permission to this page');
        }
    }

    public function create()
    {
        if (in_array(Auth::user()->role, ['Sudo'])) {
            $userRole = StatusConstants::USERS_ROLE;
            return view('dashboard.users.create', [
                'userRole' => $userRole,
            ]);
        } else {
            abort(403, 'You do not have permission to this page');
        }
    }

    public function store(Request $request)
    {
        try {
            (new ServicesUsersService)->createUser($request);
            return redirect()->route('dashboard.user.index')->with('success_message', 'User created successfully.');
        } catch (Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
            return redirect()->back()->with('error_message', 'An error occurred while creating the user.' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        if (in_array(Auth::user()->role, ['Sudo'])) {
            $user = User::findOrFail($id);
            $userRole = StatusConstants::USERS_ROLE;
            return view('dashboard.users.edit', [
                'userRole' => $userRole,
                'user' => $user,
            ]);
        } else {
            abort(403, 'You do not have permission to this page');
        }
    }

    public function update($id, Request $request)
    {
        try {
            (new ServicesUsersService)->updateUser($request, $id);
            return redirect()->route('dashboard.user.index')->with('success_message', 'User updated successfully.');
        } catch (Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
            return redirect()->back()->with('error_message', 'An error occurred while updating the user.' . $e->getMessage());
        }
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success_message', 'User deleted successfully');
    }


    public function loginDetails($user)
    {
        (new ServicesUsersService)->sendLoginDetails($user);
        return redirect()->route('dashboard.user.index')->with('success_message', 'Login details sent successfully.');
    }
}
