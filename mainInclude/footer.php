<!--start footer-->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2020|| Designed By E-Learning || <a href="#admin" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a></small>
</footer>
<!--end footer-->

<!--start student registration form modal-->
 
  <!-- Modal -->
  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!--start registration form-->
            <?php
            include('StudentRegistration.php');
            ?>
              <!--end registration form-->
        </div>
        <div class="modal-footer">
          <span id="successMsg"></span>
          <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        </div>
      </div>
    </div>
  </div>
<!--end student registration form modal-->


<!--start student Login form modal-->
 
  <!-- Modal -->
  <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!--start Login form-->
            <form id="stuLoginForm">
            
                <div class="form-group">
                  <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold"> Email</label>
                  <input type="email" class="form-control" id="stuLogemail" name="stuLogemail" placeholder="Email" aria-describedby="emailHelp">
                  
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold"> Password</label>
                  <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
                </div>
                
                
              </form>
              <!--end Login form-->
        </div>
        <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          
        </div>
      </div>
    </div>
  </div>
<!--end student Login form modal-->


<!--start Admin Login form modal-->
 
  <!-- Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!--start admin Login form-->
            <form id="adminLoginForm">
            
                <div class="form-group">
                  <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weight-bold"> Email</label>
                  <input type="email" class="form-control" id="adminLogemail" name="adminLogemail" placeholder="Email" aria-describedby="emailHelp">
                  
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold"> Password</label>
                  <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
                </div>
                
                
              </form>
              <!--end Admin Login form-->
        </div>
        <div class="modal-footer">
        <small id="statusAdminLogMsg"></small>
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          
        </div>
      </div>
    </div>
  </div>
<!--end Admin Login form modal-->

<!--jquery and bootstrap javascript-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<!--font awesome js-->
<script src="js/all.min.js"></script>

<!--student testimonial owl slider
<script type="text/javascript" src="js/owl.min.js"></script>
<script type="text/javascript" src="js/testyslider.js"></script>--> 

<!--student ajax call javascript-->
<script type="text/javascript" src="js/ajaxrequest.js"></script>

<!--admin ajax call javascript-->
<script type="text/javascript" src="js/adminajaxrequest.js"></script>



</body>
</html>