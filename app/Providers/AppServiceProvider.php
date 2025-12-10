<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\GuestOrder;
use App\Models\Order;
use App\Models\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        view()->composer('*', function ($view) {
            $view->with('categories', Category::all());
        });

        View::composer('*', function ($view) {
            $unreadNotificationsCount = Auth::check()
                ? Notification::where('user_id', Auth::id())->where('is_read', false)->count()
                : 0;

            $view->with('unreadNotificationsCount', $unreadNotificationsCount);
        });

        View::composer('layouts.app', function  ($view) {
            $user = Auth::user();

            if ($user) {
                $todoUsersCount = $user->role === 'admin' ? Order::where('status', '発送待ち')->count() : 0;
                $todoGuestsCount = $user->role === 'admin' ? GuestOrder::where('status', '発送待ち')->count() : 0;
                $todosCount = $todoUsersCount + $todoGuestsCount;
                $request = request();
                $cartItemsCount = app()->call('App\Http\Controllers\CartController@getCartItemsCount', ['request' => $request]);

                $view->with(compact('todosCount', 'cartItemsCount'));
            }

            $request = request();
            $cartItemsCount = app()->call('App\Http\Controllers\CartController@getCartItemsCount', ['request' => $request]);

            $view->with(compact('cartItemsCount'));
        });
    }
}
