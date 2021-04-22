@extends('layouts.app')

@section('content')
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Saira&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Mulish&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&family=Saira&display=swap');
   </style>

  <div class="" style="margin: 150px">
    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float: left; border-radius:50%; margin-right:25px" alt="">
    <h2>{{ $user->name }}'s profile</h2>
 
    <form action="/profile" method="POST" enctype="multipart/form-data">
     @csrf
         <label for="">Update Profile Image</label>
         <input type="file" name="avatar" >
         <input type="submit" value="Submit" style="padding: 20px 30px; background-color:pink">
    
    </form>
  </div>

@endsection