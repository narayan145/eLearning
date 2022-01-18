<?php
    if(!isset($_SESSION)){
    session_start();
    }

    $db_host="127.0.0.1:3307";
    $db_user="root";
    $db_password="";
    $db_name="ims_db";

    //create connection
    $conn=new mysqli($db_host, $db_user, $db_password, $db_name);

    //check connection
    if($conn -> connect_error){
        die ("connection failed");
    }

    //else{
    //  echo "connected";
    //}


//Admin Login Verification
if(!isset($_SESSION['is_admin_login'])){
if(isset($_POST['checkLogemail']) && isset($_POST['adminLogemail'])
 && isset($_POST['adminLogpass'])){
    $adminLogemail=$_POST['adminLogemail'];
    $adminLogpass=$_POST['adminLogpass'];

    $sql="SELECT admin_email, admin_pass FROM admin WHERE admin_email='".$adminLogemail."' 
    AND admin_pass='".$adminLogpass."'";
    
    $result = $conn->query($sql);
    $row = $result->num_rows;  
        if($row==1){
        $_SESSION['is_admin_login']=true;
        $_SESSION['adminLogEmail']=$adminLogemail;
        echo json_encode($row);
    } else if($row==0){
        echo json_encode($row);
    }
} 
}
?>