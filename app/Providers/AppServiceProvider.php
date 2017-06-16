<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
             $event->menu->add([
                'text' => 'Files',
                'url' => '/files',
                'icon' =>'file',
            ]);
            $event->menu->add([
                'icon' =>'asterisk',
                'text' => 'Settings',
                'url' => '/setings',
            ]);
            $event->menu->add([
                'text' => 'Syllabus',
                'url' => '/syllabus',
                'icon' =>'plus',
            ]);
            $event->menu->add([
                'text' => 'Exam marks',
                'url' => '/marks',

            ]);
            $event->menu->add([
                'text' => 'Notice Board',
                'url' => '/notice',
                'icon' =>'paperclip',
            ]);
            $event->menu->add([
                'text' => 'Teacher',
                'url' => '/teacher',
                'icon' =>'user',
            ]);
            $event->menu->add([
                'text' => 'Student',
                'url' => '/students',
                'icon' => 'graduation-cap',
            ]);
            $event->menu->add([
                'text' => 'Attendance',
                'url' => '/marks',
                'icon' =>'flash',
            ]);
            $event->menu->add([
                'text' => 'Class Routine',
                'url' => '/routine',
                'icon' =>'paperclip',
            ]);

            /*if(User::find(Auth::id())->roles('student'))*/
            $event->menu->add([
                    'text' => 'Parents',
                    'url' => '/parents',
                    'icon' =>'users',
                ]);



            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
