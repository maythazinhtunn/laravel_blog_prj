<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function createPost()
    {
        return view('user.create');
    }

    public function userProfile()
    {
        return view('user.userprofile');
    }

    public function contactUs()
    {
        return view("user.contactus");
    }

    public function addPost()
    {
        return "HI";
    }
}
