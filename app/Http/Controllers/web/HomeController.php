<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $page ='Home';
        return view('web.pages.home',compact('page'));
    }
    public function about(){
        $page ='about';
        return view('web.pages.about',compact('page'));
    }
    public function services(){
        $page ='services';
        return view('web.pages.services',compact('page'));
    }
    public function projects(){
        $page ='projects';
        return view('web.pages.projects',compact('page'));
    }
    public function contactus(){
        $page ='contactus';
        return view('web.pages.contactus',compact('page'));
    }
}
