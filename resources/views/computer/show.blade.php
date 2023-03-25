@extends('layout')
@section('content')

    <div class="flex justify-center mt-10">
       <h1 class="text"> Computer</h1>
    </div>
<div class="  mt-8">
    <h3>{{$computer['name']}} is from <strong>{{$computer['origin']}}</strong>price is <strong>{{$computer['price']}}</strong></h3>
</div>
<a class="edit-btn flex justify-center" href="{{route('computer.edit',$computer->id)}}">EDIT</a>
<form action="{{route('computer.destroy',['computer'=>$computer->id])}}" method="post">
<input type="submit" value="delete">
    @csrf
    @method('delete') 
</form>

@endsection
@section('title','computer show')
