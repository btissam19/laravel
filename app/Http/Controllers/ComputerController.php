<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
/*This controller we use it for manipulate data base and we create it using command php artisan make:controller -r
In effect this is call ressorces controller
 */

class ComputerController extends Controller{
//    private static function getdate(){
    // return [
        // ['id'=>1,'name'=>'LG','country'=>'koria'],
        // ['id'=>2,'name'=>'HP','country'=>'US'],
        // ['id'=>3,'name'=>'ACER','country'=>'germany']
    // ];


    /**
     * Display a listing of the resource.
     * Here we call controller extention and we define data base manuallt but this not the right mothed just for training
     */
    public function index()
    {
       return  view('computer.index',['computer'=>Computer::all()]);
      /**Display a listing of the resource.
       *'computer.index' exeste in views  */ 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computer.create');
        /**
 * Show the form for creating a new resource.
 * 'computer.create' page of form
 */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'computer-name'=>'required',
            'computer-origin'=>'required',
            'computer-price'=>['required','integer']
            ]
        );
        $computer=new Computer();
        $computer->name=strip_tags($request->input('computer-name'));
        $computer->origin=strip_tags($request->input('computer-origin'));
        $computer->price=strip_tags($request->input('computer-price'));
        /**
        * Store a newly created resource in storage.
        */
        $computer->save();
        return redirect()->route('computer.index');
        /**for show this store in computer.index page */
    }

    /**
     * Display the specified resource.
     */
    public function show($computer)
    {
        // $computer=self::getdate();
        // $index=array_search($id,array_column( $computer,'id'));
        return view('computer.show',['computer'=> Computer::findOrfail($computer)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($computer)
    {
        return view('computer.edit',['computer'=> Computer::findOrfail($computer)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$computer )
    {
        $request->validate([
            'computer-name'=>'required',
            'computer-origin'=>'required',
            'computer-price'=>['required','integer']
            ]
        );
        $to_update=Computer::findOrfail($computer);
        $to_update->name=strip_tags($request->input('computer-name'));
       $to_update->origin=strip_tags($request->input('computer-origin'));
        $to_update->price=strip_tags($request->input('computer-price'));
        $to_update->save();
        return redirect()->route('computer.show',$computer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($computer)
    {
        $to_delete=Computer::findOrfail($computer);
        $to_delete->delete();
        return redirect()->route('computer.index');

    }
}
