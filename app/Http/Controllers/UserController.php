<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // User::all();
        $users = [
            ["name" => "Ahmed Ali", "email" => "a@gmail.com", "age" => 25],
            ["name" => "Mohammmed Salah", "email" => "mo@gmail.com", "age" => 30],
            ["name" => "Sara Ahmed", "email" => "sara@gmail.com", "age" => 22],
            ["name" => "Ashraf Taha", "email" => "ash@gmail.com", "age" => 21],
            ["name" => "Mona Mohammed", "email" => "mona@gmail.com", "age" => 25],
            ["name" => "Taha Samir", "email" => "taha@gmail.com", "age" => 23],
        ];
        // return view('users.index', ["users" => $users]);
        // return view('users.index')->with("users", $users);
        return view('users.index', compact("users"));
    }

    public function show($id)
    {
        $user = ["name" => "Ahmed Ali", "email" => "a@gmail.com", "age" => 25];
        return view("users.show", compact('user'));
    }

    public function create()
    {
        return view("users.create");
    }

    public function store()
    {
        return "User Created Succsufully";
    }
}
