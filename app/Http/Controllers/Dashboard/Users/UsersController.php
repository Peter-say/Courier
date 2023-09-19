<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Constants\StatusConstants;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UsersService as ServicesUsersService;
use App\Services\UsersService\UsersService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $userRole = StatusConstants::USERS_ROLE;
        return view('dashboard.users.create', [
            'userRole' => $userRole,
        ]);
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


    public function loginDetails($user)
    {
        (new ServicesUsersService)->sendLoginDetails($user);
        return redirect()->route('dashboard.user.index')->with('success_message', 'Login details sent successfully.');
    }
}
