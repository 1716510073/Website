<!DOCTYPE html>
<html>
<head>
  <title>Login form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="assets/css/main3.css">
</head>
<body>

  <section style="margin-top: 10%;">
   <div class="container c">
     <div class="row">
      

       <div class="col-sm-7" style="padding: 0px">
         <img src="assets\img\logo.png" class="img3">
          <form>
           <center>
           <h2 class="Form">FORM</h2>
             <div class="row">
               <div class="col-sm-12">
                 <div class="row">
                  <div class="col-sm-2">
                    
                  </div>
                   <div class="col-sm-8">
                     <div class="form-group">
                          <input type="text" class="form-control" id="usr" placeholder="Username">
                      </div>
                   </div>

                   <div class="col-sm-2">
                     
                   </div>
                 </div>

                 <div class="row">
                  <div class="col-sm-2">
                    
                  </div>
                   <div class="col-sm-8">
                     <div class="form-group">
                          <input type="text" class="form-control" id="psw" placeholder="Password">
                      </div>
                   </div>

                   <div class="col-sm-2">
                     
                   </div>
                 </div>

                <div class="row">
                  <div class="col-sm-2">
                    
                  </div>
                   <div class="col-sm-4">
                      <a href="forgot_password.html">Forgot Password?</a>
                    </div>  
                   <div class="col-sm-4">
                      <a href="Register.html" class="">Register</a>
                   </div>
                   <div class="col-sm-2">
                     
                   </div>
                </div>

                <div class="row" style="padding-top: 20px">
                  <div class="col-sm-12">
                  	
                    <button type="button" class="btn btn-warning btn-lg btn-block ripple-surface" class="sub" style="width: 65%;">Submit</button>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <img src="assets\img\image.png" class="img3">
                </div>
               </div>

               <div class="row">
                  <div class="col-sm-12">
                     <small>&copy; Copyright 2018, Example Corporation</small>
                  </div>
                </div>

             </div>
           </center>
          </form>
       </div>
        <div class="col-sm-5 b">
   
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="assets\img\banner1.jpg" class="slide" style="width:100%; height:430px; border-radius: 15px;">
              </div>

              <div class="item">
                <img src="assets\img\13.jpg" class="slide" style="width:100%; height:430px; border-radius: 15px;">
              </div>
            
              <div class="item">
                <img src="assets\img\about.jpg" class="slide" style="width:100%; height: 430px; border-radius: 15px;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


       </div>
     </div>
   </div> 
  </section>
</body>
</html>