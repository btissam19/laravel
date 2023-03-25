@extends('layout')
@section('content')

    <div class="flex justify-center mt-10">
       <h1 class="text"> Computer</h1>
    </div>
<div class="mt-8">
                        @if (count($computer)>0)
                           <ul>
                           @foreach ($computer as $computer)
                           <a href="{{route('computer.show',['computer'=>$computer['id']])}}">
                           <li>{{$computer['name']}} is from <strong>{{$computer['origin']}}</strong> and price is <strong>{{$computer['price']}}</strong></li> 
                           </a>
                           {{-- if we add somthing in form will orgnazed like this and computer attribut must be the same in computer [] --}}
                           @endforeach  
                           </ul> 
                        @else 
                        <p>there are no computer to display</p>
                        {{-- if not or somthing dosen't work we will paly this  --}}
                        @endif  
                     
</div>

@endsection
@section('title','computer')
