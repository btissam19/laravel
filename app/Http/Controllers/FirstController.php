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
// In controllers classe on définie les méthodes et les views que on créé avec le type de retpur et cela using des fonction pour chaque view
//here we define classe of controller with its methode 
//we creat it using command line php artisan make:controller <name of controller > we can also write php artisan -h for show all the command we can do
//This controllor show all views normal so each view with an controller for play it