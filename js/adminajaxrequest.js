//Ajax call for Admin Login verification
function checkAdminLogin(){
    var adminLogemail=$("#adminLogemail").val();
    var adminLogpass =$("#adminLogpass").val();
    
    $.ajax({
        url:"Admin/admin.php",
        method:"POST",
        data:{
            checkLogemail:'checkLogemail',
            adminLogemail:adminLogemail,
            adminLogpass:adminLogpass,

        },
        success:function(data){
           // console.log(data);
            if(data==0){
                $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password !</small>');
            } else if(data==1){
                $("#statusAdminLogMsg").html('<small class="alert alert-success">Success Loading....!</small>');
                setTimeout(()=>{
                window.location.href="admin/adminDashboard.php";
                }, 1000 );
            }
        },
    }); 
} 