<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function viewHomePage()
    {
        return view('client.share.master');
    }

    public function viewRegister()
    {
        return view('client.page.auth.register');
    }

    public function viewLogin()
    {
        return view('client.page.auth.login');
    }
}
