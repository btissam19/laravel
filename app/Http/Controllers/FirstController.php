<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
   public function index() {return view('welcome');}
   public function about(){return view('about');}
   public function contact(){return view('contact') ;}
   public function portfolio(){return '<h1> you are in the portfolio  page</h1>';}
}
//here we define classe of controller with its methode 
//we creat it using command line php artisan make:controller <name of controller > we can also write php artisan -h for show all the command we can do 
