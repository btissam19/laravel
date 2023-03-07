@extends('layout')
<!-- to refer to the page which has the main and repititve content in this case we called it layout-->
@section('content')
<!-- the name of section and its content -->

    <div class="flex justify-center mt-10">
      <h1 class="text">  HOME</h1>
    </div>

<div class=" text-center items-center justify-center rounded-full mt-10">
                        
                         welcome to our Home page           
</div>
<!--end of section-->
@endsection
@section('title','Welcome')
<!-- we add this section for change the title dynamicly based on each page-->