@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batch Page</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Course_id</label></br>
        {{-- <input type="text" name="course_id" id="course_id" class="form-control"></br> --}}
        <select name="course_id" id="course_id" ></select>
        


        <label>Start_date</label></br>
        <input type="date" name="start_date" id="start_date" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop