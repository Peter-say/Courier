<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class Contact extends Model
{
    use HasFactory;

    public function countAdminNotification()
    {
        $count = 0;
        $user = User::where('id', 'Sudo');
        $notification = Notification::where('id' != 'read_at')->where()->get();
        if ($count) {
            $count = $notification->count();
        }
    }
}
