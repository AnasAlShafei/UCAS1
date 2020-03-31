<?php


namespace App\Repositories;


use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserInterface
{
    public function getAllUsers()
    {
        $users = user::all();
        return view('control.users.index',compact('users'));
    }
}
