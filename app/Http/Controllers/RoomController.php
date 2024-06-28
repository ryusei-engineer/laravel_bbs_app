<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;

class RoomController extends Controller
{
    public function index($room_id){
        $comments = Comment::where('room_id',$room_id)->get();
        $users_id = Comment::pluck('user_id')->toArray();
        $names = User::whereIn('id',$users_id)->get();
        return view('room',compact('comments','names'));
    }

    public function store(Request $request,$room_id){
        $validated = $request->validate([
            'content' => 'required',
        ]);
        $validated['user_id'] = \Auth::user()->id;
        $validated['room_id'] = $room_id;

        Comment::create($validated);
        return back();
    }
}
