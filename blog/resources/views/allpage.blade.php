@extends('home')
 
@section('title', $title )


    

<!-- Menu ------------------------------>
 @section('menu')
            <div class="col-sm-3 sidenav">
                 <h4><small>Menu System</small></h4>
                 <ul class="nav nav-pills nav-stacked">

                     <li class="active">
                         <a href="javascript:void(0)"  id="receive"><span class="badge">1</span> รายการเอกสารรับ</a>
                     </li>  

                     <li class="active">
                         <a href="#"><span class="badge">2</span> รายการเอกสารส่ง</a>
                     </li >  

                       <li class="active">
                         <a href="#"><span class="badge">3</span> ออกใบเซ็นต์เอกสาร</a>
                     </li >  

                       <li class="active">
                         <a href="#"><span class="badge">4</span> ออกจากระบบ  </a>
                     </li>  

                 </ul>

            </div>

 <!-- Menu ------------------------------>
 
 
 <!-- Content ------------------------------------------>
 @section('content')
    <div class="col-sm-9">
      <h4><small>Monitor System</small></h4>
      <hr>
    </div>
  <!-- Content ------------------------------------------>
  
  <!----------------------------  Footer ------------------------>    
  <!--
@section('footer')
<footer class="container-fluid">
  <p>Footer Text</p>
</footer>
  -->
  <!----------------------------  Footer ------------------------>    
  
  <!-------------------  คลิกเอกสารรับ -------------------->
     @section('receive')
     <div class="modal fade"  id="mod_receive"  role="dialog">
         <div class="modal-dialog">
         
           

             
                <!-- Modal content-->
      <div class="modal-content">
    
        <!-- TAB ------------------->
        
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a  data-toggle="tab" href="#menu1">ศูนย์วิจัย ฯ</a></li>
  <li role="presentation"><a  data-toggle="tab"  href="#menu2">ศูนย์การแล ฯ</a></li>
  <li role="presentation"><a  data-toggle="tab" href="#menu3">มูลนิธิ ฯ</a></li>
</ul>   
        
   
        <!--
          <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>
        -->
        
        <!-- TAB ------------------->
          
          <!--
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><small> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>       <span class="badge">1</span> เอกสารรับ</small></h4>
        </div>
        -->
        
          <div class="tab-content">
              
              
              <!----------------------------------  tab 1 --------------------------------->
                        <div id="menu1" class="tab-pane fade in active">
                          
                          
                          <!--  head  document --->  
                            <div class="modal-header" style="padding:20px 20px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4><small> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>       <span class="badge">1</span> รายการเอกสารรับ</small></h4>
                             </div>
                        <!--  head  document --->   
                            
                           <div   class="modal-body" style="padding:40px 50px;">
                               <form role="form"  id="receive1"  class="form-horizontal"    >
                                      <div class="form-group">
                                        <label for="usrname"><span class="glyphicon glyphicon-ok"></span> เลขรับ </label>
                                        <input type="text" class="form-control" id="usrname" placeholder="เลขรับ" aria-describedby="sizing-addon3">
                                      </div>
                                      <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-ok"></span> เลขที่เอกสาร </label>
                                        <input type="text" class="form-control" id="psw" placeholder="เลขที่เอกสาร">
                                      </div>
                                        <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-ok"></span> วันที่รับ </label>
                                                   <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                                        
                            
                                       
                                      </div> 
                                        
                                      <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-ok"></span> จาก </label>
                                        <input type="text" class="form-control" id="psw" placeholder="จาก">
                                      </div>
                                        
                                        <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-ok"></span> ถึง </label>
                                        <input type="text" class="form-control" id="psw" placeholder="จาก">
                                         <label for="psw"><span class="glyphicon glyphicon-ok"></span> หรือ ระบุ </label>
                                        <input type="text" class="form-control" id="psw" placeholder="หรือ ระบุ">
                                      </div>
                                    
                                        
                                        <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-ok"></span> เรื่อง </label>
                                        <input type="text" class="form-control" id="psw" placeholder="เรื่อง">
                                      </div>
                                        
                                          <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-ok"></span> การปฏิบัติ </label>
                                        <input type="text" class="form-control" id="psw" placeholder="การปฏิบัติ">
                                      </div>
                                        
                                                <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-ok"></span> หมายเหตุ </label>
                                        <input type="text" class="form-control" id="psw" placeholder="หมายเหตุ">
                                      </div>
                                        
                                        
                                        
                                        <!--
                                        <div class="form-group">
                                            <span class="glyphicon glyphicon-saveable" ></span>
                                              <button type="submit" class="btn btn-info"> บันทึก</button>
                                        </div>
                                      --
                                        
                                        <!--
                                      <div class="checkbox">
                                        <label><input type="checkbox" value="" checked>Remember me</label>
                                      </div>
                                        
                                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                                        -->
                                        
                                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon glyphicon-off" ></span> Save </button>
                                        
                                    </form>
                           </div>
                            <div class="modal-footer">
                                
                                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ปิดหน้าต่าง </button>
                                        <!--
                                        <p>Not a member? <a href="#">Sign Up</a></p>
                                        <p>Forgot <a href="#">Password?</a></p>
                                        -->
                            </div>
                        </div>
              <!----------------------------------  tab 1 --------------------------------->
                    
            <!----------------------------------  tab 2 --------------------------------->     
                        <div id="menu2" class="tab-pane fade">
                            <div   class="modal-body" style="padding:40px 50px;">
                                
                          <!--  head  document --->  
                          <div class="modal-header" style="padding:20px 20px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4><small> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>       <span class="badge">1</span> รายการเอกสารรับ</small></h4>
                             </div>
                        <!--  head  document --->    
                        
                        
                                       <h3>Menu 2</h3>
                                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                         
                        </div>
              <!----------------------------------  tab 2 ---------------------------------> 
              
               <!----------------------------------  tab 3 --------------------------------->     
                        <div id="menu3" class="tab-pane fade">
                            <div   class="modal-body" style="padding:40px 50px;">
                                
                          <!--  head  document --->  
                          <div class="modal-header" style="padding:20px 20px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4><small> <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>       <span class="badge">1</span> รายการเอกสารรับ</small></h4>
                             </div>
                        <!--  head  document --->     
                        
                        
                                     <h3>Menu 3</h3>
                                     <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        
                        </div>
               <!----------------------------------  tab 3 --------------------------------->  
               
  </div>
        
        
         <!--   
         <div   class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
          -->
          
       <!--
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
        -->
        
      </div>
          
        </div>      
                
         </div>
     </div>
  <!-------------------  คลิกเอกสารรับ -------------------->    
  