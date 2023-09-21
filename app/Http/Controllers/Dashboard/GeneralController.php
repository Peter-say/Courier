<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{


    public function allNotification()
    {
        $role = 'Sudo';
        $user = Auth::user();

        $notifications = $user->notifications()
            ->where(function ($query) use ($role) {
                $query->whereHas('notifiable', function ($query) use ($role) {
                    $query->where('role', $role);
                });
            })->get();

        return view('dashboard.notification.index', compact('notifications'));
    }

    public function notificationDetails($id)
    {
        $role = 'Sudo';
        $user = Auth::user();

        $notification = $user->notifications()
            ->where(function ($query) use ($role) {
                $query->whereHas('notifiable', function ($query) use ($role) {
                    $query->where('role', $role);
                });
            })
            ->findOrFail($id);

        $notification->markAsRead();

        return view('dashboard.notification.details', compact('notification'));
    }
}
