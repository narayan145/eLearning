 
<?php
include('./Connection.php');
include('./mainInclude/header.php');
?>

<!--start course page banner--> 
<div class="container-fluid bg-dark">
    <div class="row">
     <img src="./image/coursebanner.jpg" alt="courses"
     style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
    </div>
</div>
<!--end course page banner-->

<div class="container jumbotron mb-5">
<div class="row">
    <div class="col-md-4">
    <h5 class="mb-3">If Already Registered !! Login</h5>
    <form role="form" id="stuLoginForm">
            
                <div class="form-group">
                  <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold"> Email</label>
                  <input type="email" class="form-control" id="stuLogemail" name="stuLogemail" placeholder="Email" aria-describedby="emailHelp">
                  
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold"> Password</label>
                  <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
                </div>
                
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button> 
              </form><br/>
              <small id="statusLogMsg"></small>
        </div>
        <div class="col-md-6 offset-md-1">
        <h5 class="mb-3">New User !! Sign Up</h5>    
        <form id="StuRegForm" role="form" autocomplete="on">
    <div class="form-group">
        <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold"> Name</label>
        <small id="statusMsg1"></small><input type="text" class="form-control" name="stuname" id="stuname" placeholder="Name" >
        
    </div>
    <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold"> Email</label>
    <small id="statusMsg2"></small><input type="email" class="form-control" id="stuemail" name="stuemail" placeholder="Email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">Create Password</label>
    <small id="statusMsg3"></small><input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
    </div>
    <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Sign Up</button>
    </form><br/>
    <small id="successMsg"></small>
        </div>

    </div>
</div>
<br/>

<?php 
include('./contact.php');
?>

<!-- start including footer-->
<?php
include('./mainInclude/footer.php');
?>
<!--end including footer-->

