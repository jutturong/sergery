<!DOCTYPE html>
<html>
    <head>
        <title>{{$title}}</title>

        <!--
          <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> 
         -->
         
           <link href="{{ asset("bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
           <link href="{{ asset("bootstrap/dist/css/bootstrap-theme.min.css") }}" rel="stylesheet" type="text/css">
           
            <script src="{{ asset("https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js") }}"></script>
            <script src="{{asset("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js") }}"></script>
            
            
            

  
  
         
          <!--
          <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
          <script src="bootstrap/dist/js/bootstrap.js" ></script>
          -->
         <!--
          <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
          <link href="bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
         -->
          
          
          
          
          
         <!--
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
         -->

         <!--
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
         -->
         
         <!--
         <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
         <link href="{{ asset('bootstrap/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet">
         <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}" />
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
         -->
         
       
         <!--
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
        -->
        
    </head>
    <body>
        

        

       

        

<div class="container-fluid">
  <div class="row content">
      
      <!-- Menu -->
    <div class="col-sm-3 sidenav">
         <h4><small>รายการหลักระบบ</small></h4>
         
       
         <!--
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Friends</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
         -->
         
         <ul class="nav nav-pills nav-stacked">
           
             <li class="active">
                 <a href="#"><span class="badge">1</span> เอกสารรับ</a>
             </li>  
             
             <li class="active">
                 <a href="#"><span class="badge">2</span> เอกสารส่ง</a>
             </li >  
             
               <li class="active">
                 <a href="#"><span class="badge">3</span> ออกใบเซ็นต์เอกสาร</a>
             </li >  

               <li class="active">
                 <a href="#"><span class="badge">4</span> ออกจากระบบ  </a>
             </li>  
             
             @section('menu')
             
             
             

              
             
         </ul>
      
    </div>
      <!-- Menu -->

      <!-- Content -->
    <div class="col-sm-9">
      <h4><small>รายการแสดงผล</small></h4>
      <hr>
      
      
      <!--
      <h2>I Love Food</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
      <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
      <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><br>
      
      
      
      <h4><small>RECENT POSTS</small></h4>
      
      
      <hr>
      <h2>Officially Blogging</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
      <h5><span class="label label-success">Lorem</span></h5><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>

      <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
          <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
          <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
          <p><span class="badge">1</span> Comment:</p><br>
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-xs-10">
              <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
              <p>Me too! WOW!</p>
              <br>
            </div>
          </div>
        </div>
      </div>
      -->
      
    </div>
  </div>
</div>
        
        
        
 <!-- Content -->
 
 
<!--        
<footer class="container-fluid">
  <p>Footer Text</p>
</footer>
 -->       
        



    </body>
</html>
<?php



