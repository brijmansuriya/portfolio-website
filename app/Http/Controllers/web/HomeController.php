<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('web.pages.home');
    }
    public function about(){
        return view('web.pages.about');
    }
    public function services(){
        return view('web.pages.services');
    }
    public function projects(){
        return view('web.pages.projects');
    }
    public function contactus(){
        return view('web.pages.contactus');
    }
}
