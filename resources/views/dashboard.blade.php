@extends('layouts.app')

@section('content')
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Saira&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Mulish&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&family=Saira&display=swap');




      /* About us page */

.about-section{
    background: url("./myImages/sdu1.jpg") no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
   </style>
   


   <div class="about-section">
      <div class="inner-container">
          <h1>About Us</h1>
          <p class="text">
            The SDU Answers.com is an exciting online question and answer community. SDU Answers.com will provide you with the answers you are looking for. It gives you FREE, 24/7 access to a whole university of information, and to millions of knowlegeable friends. 
          </p>
          <div class="skills">
              <span>Free</span>
              <span>Answers</span>
              <span>Online</span>
          </div>
      </div>
  </div>
@endsection