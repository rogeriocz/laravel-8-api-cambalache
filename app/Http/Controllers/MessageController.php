<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
       $menssages = Message::all();

        return response($menssages);
    }

    public function store(Request $request)
    {
       $request ->validate([
        'name' => 'required',
        'email' => 'required',
        'message' => 'required|max:255',

       ]);

       $message = Message::create($request->all());

        return response($message);
    }
}
