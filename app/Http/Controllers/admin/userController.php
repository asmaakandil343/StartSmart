<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users = User::getAll();
        return $users;
    }

    public function create()
    {

    }
    public function story(Request $request)
    {

    }
    public function edit($request)
    {

    }
    public function update(Request $request)
    {

    }
    public function destory(Request $request)
    {

    }
}
