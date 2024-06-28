<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;

class UserController extends Controller
{
    public function index(){
        return view('user.register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($validated);
        return view('user.login');
    }


    public function loginForm(){
        return view('user.login');
    }

    public function login(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if(\Auth::attempt($validated,true)){
            $rooms = Room::all();
            return view('index', compact('rooms'));
        }
        
    }

    public function rooms(){
        $rooms = Room::all();
        return view('index', compact('rooms'));
    }
}
