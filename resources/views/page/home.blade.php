@extends('layouts.app') 
@section('title', 'halaman home')
@section('content')
<div class="container">
    <hr>
    <div>
      <a href="#"><h1 style ="color : black;">Valentine's  Day Gift <br>Giving Guide</h1></a>
      <br>
      <a href="#"><img src="{{ ('img/sun.jpg') }}" width="150px" height="150px" >
      <br>
        <p>Let’s face it.  Valentine’s Day is definitely one of the more polarizing <br>
            holidays during the year. <br> Some of us love the sentimentality of a day about love, while…
        </p>
        <a href="#">see more...</a>
    </div>
    <hr>
    <div>
        <a href="#"><h1 style ="color : black;">An Anti-Valentine’s Day How-To: <br> 
            For Those of Us <br>Without Plans on the Day of Love</h1>
        </a>
      <br>
      <a href="#"><img src="{{ ('img/love.jpg') }}" width="150px" height="150px" >
      <br>
        <p> Not all of us love the day of love. Sure, for some  <br>
            it’s a day of mushy-gushy lovey-dovey <br>      
            displays of affection. But…
       </p>
        <a href="#">see more...</a>
    </div>
    <hr>
    <div>
        <a href="#"><h1 style ="color : black;">How to (Efficiently) Shop <br> 
            Online for a Show-Stopping Look</h1>
        </a>
      <br>
      <a href="#"><img src="{{ ('img/baju.jpg') }}" width="150px" height="150px" >
      <br>
        <p>Sometimes life throws you an occasion you never thought <br>
          in a million years you’d experience 
          (at least not again), <br>and you need new clothes. Nothing…
        </p>
        <a href="#">see more...</a>
    </div>
    <hr>
</div>

<br>

@stop



@section('js')
   <script>
        console.log('hello');
   </script>
@stop