@extends('layout')
@section('content')
{{-- the create form page whic we call it in other and ts name is IMportant --}}
{{--  --}}
    <div class="flex justify-center mt-10">
       <h1> edit an old computer</h1>
    </div>
<div class="  mt-8">
<form action="{{route('computer.update',['computer'=>$computer->id])}}" method="post">
    {{-- in action we derict where the information in thIs form will send and in effect we send it to computer store because theire we have information about data base --}}
    @csrf
    @method('PUT') 
    {{--  this is for not display page exipred --}}
<div class="form-group">
    <label for="computer-name">Computer Name</label>
    <input id="computer-name" name="computer-name" value="{{$computer->name}}" type="text">
    @error('computer-name')
  <div class="form-error">{{$message}}</div>
    
@enderror
{{--  the name we use it for define things in data base  --}}
{{-- the for and id must be the same --}}
</div>
    <div class="form-group">
        <label for="computer-origin">Computer Origine</label>
        <input id="computer-origin" name="computer-origin"value="{{$computer->origin}}" type="text">
    @error('computer-origin')
      <div class="form-error">{{$message}}</div>
        
    @enderror
    </div>
    <div class="form-group">
        <label for="computer-price">Computer Price</label>
        <input id="computer-price" name="computer-price" value= "{{$computer->price}}" type="text">
        @error('computer-price')
  <div class="form-error">{{$message}}</div>
    
@enderror
    </div>
    <div><button type="submit">Submit</button>
    </div>
</form>
</div>

@endsection
@section('title','computer create')
