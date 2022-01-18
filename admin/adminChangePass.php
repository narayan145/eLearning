<?php
if(!isset($_SESSION)){
    session_start();
}
error_reporting(0);
include('./admininclude/header.php');
include('../Connection.php');

if(isset($_SESSION['is_admin_login'])){
$adminEmail=$_SESSION['adminLogEmail'];
}else{
    echo "<script> location.href='../index.php';</script>";
}
$adminEmail=$_SESSION['adminLogEmail'];

if(isset($_REQUEST['adminPassUpdateBtn'])){
    if(($_REQUEST['adminPass']=="")){
        //checking empty fields...
    $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">All Fields are Required...</div>';
    }
    
    else{
        $sql = "SELECT * FROM admin WHERE admin_email= '$adminEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $adminPass=$_REQUEST['adminPass'];
        $sql="UPDATE admin SET admin_pass= '$adminPass' WHERE admin_email='$adminEmail'";
        if($conn->query($sql)==TRUE){
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
            Password Changed Successfully.</div>';
        }else{
            $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
            Unable to Change Password.</div>';
        }
    }
    
    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Change Password</h3>
    
<form action="" method="POST">
<div class="form-group">
        <label for="stu_id">Email</label>
        <input type="email" class="form-control" id="inputEmail" 
        value="<?php echo $adminEmail; ?>" name="stu_id" readonly>
</div>
<div class="form-group">
        <label for="stu_name">New Password</label>
        <input type="password" class="form-control" id="inputnewpassword" 
         name="adminPass" placeholder="New Password">
</div>
<div class="text-center">
    <Button type="submit" class="btn btn-danger" 
    id="adminPassUpdateBtn" name="adminPassUpdateBtn">Update</Button>
    <a href="adminDashboard.php" class="btn btn-secondary">Close</a>
</div>
<?php
if(isset($passmsg)){ echo $passmsg;}
?>
</form>
</div>



<?php
include('./admininclude/footer.php');
?>