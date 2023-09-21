<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Notification extends Model
{
    use HasFactory;

    /**
     * Cast variables to specified data types
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string'
    ];

    public function countAdminNotification()
    {
        $count = 0;
        
        $user = Auth::user();
        
        $allowedRoles = ['admin', 'Sudo']; 
        if ($user && in_array($user->role, $allowedRoles)) {
            $notifications = $user->unreadNotifications;
            $count = $notifications->count();
        }
        
        return $count; 
    }

    public function notificationLimit()
    {
        $notifications = Notification::latest('created_at')->limit(3)->get();
        return $notifications;
    }
}
