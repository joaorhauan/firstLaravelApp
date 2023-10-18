<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list()
    {
        return User::all();
    }

    public function create(Request $req)
    {
        $data = $req->all();
        return User::create($data);
    }
}
