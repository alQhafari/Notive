<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Notifications\LaravelTelegramNotification;

class RegisterController extends Controller
{
    public function store(Request $req)
    {
        $validated = $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'user_id' => ['required', 'string']
        ]);
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        $user->notify(new LaravelTelegramNotification([
            'text' => "Welcome to the application " . $user->name . "!"
        ]));

        return redirect('/');
    }
}
