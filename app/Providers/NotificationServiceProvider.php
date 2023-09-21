<?php

namespace App\Providers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $countAdminNotification = (new Notification)->countAdminNotification();
            $view->with('countAdminNotification', $countAdminNotification);

            $role = 'Sudo';
            $user = Auth::user();
            if (Auth::check()) {
                $user = Auth::user();

                $limitNotificationCount = $user->notifications()
                    ->whereNull('read_at')
                    ->limit(3)
                    ->get();
                $view->with('limitNotificationCount', $limitNotificationCount);
            }
        });
    }
}
