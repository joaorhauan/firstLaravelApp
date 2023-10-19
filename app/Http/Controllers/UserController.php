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

    public function listById(int $id)
    {
        return User::find($id);
    }

    public function create(Request $req)
    {
        $data = $req->all();
        return User::create($data);
    }

    public function edit(Request $req, int $id)
    {
        $user = User::find($id);
        $user->update($req->all());
        return $user;
    }

    public function delete(int $id)
    {
        $user = User::find($id);
        $user->delete();
        return $user;
    }
}
