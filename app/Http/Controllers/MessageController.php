<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class MessageController extends Controller
{
    public function index()
    {
        //dd(Auth::user()->name);
        $messages = Message::all()->sortByDesc('created_at');
        return view('messages', compact('messages'));
    }

    public function store(Request $request)
    {

        $rules = array(
            'email' => 'required|email',
            'name' => 'required|min:2',
            'message' => 'required|min:8'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            flash($validator->messages())->error();
            return redirect('/messages');
        }
        Message::create([
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message,
        ]);
        flash('Success')->success();

        return redirect('/messages');
    }

    public function delete($id)
    {
        if (Auth::check() && Auth::user()->name == 'admin') {
            Message::destroy($id);
            flash('Success')->success();

            return redirect('/messages');

        } else {
            return '<h3>Not allow</h3>';
        }
    }

    public function edit($id)
    {
        $message = Message::find($id);
        return view('editMessage', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'email' => 'required|email',
            'name' => 'required|min:2',
            'message' => 'required|min:8'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            flash($validator->messages())->error();
            return redirect('/messages/'.$id.'/edit');
        }

        $message = Message::find($id);
        $message->email = $request->email;
        $message->name = $request->name;
        $message->message = $request->message;

        $message->update();

        flash('Success')->success();

        return redirect('/messages');

    }
}
