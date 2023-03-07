<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[FirstController::class ,'index'])->name('home.index');
Route::get('/about',[FirstController::class ,'about'])->name('home.about');
Route::get('/contact', [FirstController::class ,'contact'])->name('home.contact');
//all is definned in FirstController classe so here we just appel the name of claase and the methode in get methode

// Route::get('/about',function(){
    // return view('about');
    // // creating a route to new file about ;
// });
// Route::get('/about/about',function(){
    // return view('about');
    // // creating a route to new file about ;
// });
// Route::get('/contact',function(){
    // return view('contact');
    // // creating a route to new file about ;
// });




// request with ?namvariable=
route::get('/about',function(){
    $filter=request('learn');
    // this variable take its value from request user enter in rout after ?variablename="value"
    if(isset($filter)){
        // return 'you are going to leran '.$filter.'  here';
    // so here we gonna show the value of wihich user set after ?variablename 
    // but by this methode we can passe script tags and due to this we can we can damange the website and for this reason we will use this function
    return  'you are going to leran '.strip_tags($filter).'  here';
    }
    return view('about');
    // if the user don't set any value we gonna show to him the home page to choose from

}
);
//request with / 
route::get('/store',function(){
    return view('store');

});
route::get('/store/{category?}/{items?}',function($category=null,$items=null){
    // store/{category?}/{items?} this for mention that store/category/items is not a new route is just an request enter from user in searc or navbar
    //function($category=null,$items=null) we print null for not have an error where any of this champs not exist
    if(isset($category)){
        if(isset($items)){
            return '<h2>'.$category.' and '.$items.'</h2>';
        }
        return '<h2>'.$category.'</h2>';
    // what we gonna do if attibute of request are set
    }
    return '<h1>welcome to our store</h1>';
    //what we gonna do if not 

});
