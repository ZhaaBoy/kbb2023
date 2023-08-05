<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\level;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class registerController extends Controller
{
    public function index()
    {
        return view('login.regist');
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_hp' => ['required', 'string'],
            'password' => ['required', 'min:6'],


        ]);

        user::create([

            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),


        ]);

        return to_route('login');
    }
}
