<!DOCTYPE html>
<html>
    <head>
       <!-- <title>{{$title}}</title> -->
        <title>@yield('title')</title>

         
         <!-------------------------------------  import Bootstrap ------------------------->
             <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset("/bower_components/bootstrap/dist/css/bootstrap-theme.min.css") }}" rel="stylesheet" type="text/css">
            <script src="{{ asset("/bower_components/jquery/dist/jquery.min.js") }}"></script>
            <script src="{{asset("/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
  <!-------------------------------------  import Bootstrap ------------------------->
 
  <!---------------------------  Date picker ---------------------------->
  <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <!---------------------------  Date picker ---------------------------->       
    
    
    <!-------------------------------------------    jquery easyui    -------------------------------------->
    <!--
    <link rel="stylesheet" type="text/css" href="/bower_components/jquery-easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/jquery-easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/jquery-easyui/themes/color.css">
    <script type="text/javascript" src="/bower_components/jquery-easyui/jquery.easyui.min.js"></script>
     -->
    <!-------------------------------------------    jquery easyui    -------------------------------------->

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
      
     
      
<!-- Menu ------------------------------>
@section('menu')
<!-- Menu ------------------------------>

<!-- Content ------------------------------------------>
@section('content')
<!-- Content ------------------------------------------>

<!-------------------  คลิกเอกสารรับ -------------------->
@section('receive')
             @push('scripts')   
                 <script src="{{asset("js/receive.js") }}"></script>
           
                     
<!-------------------  คลิกเอกสารรับ -------------------->




  </div>
</div>
        


 
 
<!----------------------------  Footer ------------------------>     
@section('footer')

<!----------------------------  Footer ------------------------>          
        



    </body>
</html>
<?php



