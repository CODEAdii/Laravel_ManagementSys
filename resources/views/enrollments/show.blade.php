@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batch Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{$enrollments->name}}</h5>
        <p class="card-text">Course_id : {{ $enrollments->course_id }}</p>
        <p class="card-text">Start_date : {{ $enrollments->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection