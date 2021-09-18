<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\newOrderNotifcation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class checkoutcontroller extends Controller
{
    public function create(){
        //single user
        $user =  User::find(1);
        $user->notify(new newOrderNotifcation);

        return 'Notifiation sent!';
        
       //mult user
        $users=User::all();
        Notification::send($users, new newOrderNotifcation );

        //custom route
        Notification::route('mail','admin@localhost')
        ->notify(new newOrderNotifcation);


        
    }
}
