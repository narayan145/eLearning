<!-- start including header-->
<?php
include('./Connection.php');
include('./mainInclude/header.php');
?>
<!--end including header-->


<!--start video background-->
<div class="container-fluid remove-vid-marg">
<div class="vid-parent">
    <video palysinline autoplay muted loop>
        <source src="video/banvid4.mp4">
    </video>
    <div class="vid-overlay"></div>
</div>
<div class="vid-content">
    <h1 class="my-content">Welcome to iSchool</h1>
    <small class="my-content">Learn and Implement</small><br><br>
    
    <?php
    
    if(!isset($_SESSION['is_login'])){
        echo '<a href="#"  class="btn btn-danger mt-3" 
        data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
    } else{
        echo '<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
    }
    ?>
    
    
   

</div>


</div>

<!--end video background-->

<!--start text banner-->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i>100+ online courses</h5>
        </div>    
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i>Expert Instruction</h5>
        </div> 
        <div class="col-sm">
            <h5><i class="fas fa-keybord mr-3"></i>Lifetime Access</h5> 
        </div>    
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee*</h5>
        </div>

    </div>    
</div>        
<!--end text banner-->

<!--start most popular couses-->
<div class="container mt-5">
<h1 class="text-center">Popular Courses</h1>
<!--start most popular course 1st card deck-->
<div class="card-deck mt-4">
<?php
$sql="SELECT * FROM course LIMIT 3";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row= $result->fetch_assoc()){
        $course_id= $row['course_id'];
        echo '<a href="coursedetail.php?course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px;">
<div class="card">
<image src="' . str_replace('..','.',$row['course_img']). '" class="card-img-top" alt="Guitar"/>
<div class="card-body">
<h5 class="card-title">' .$row['course_name']. '</h5>
<p class="card-text">' .$row['course_desc']. '</p>
</div>
<div class="card-footer">
<p class="card-text d-inline">Price: <small><del>&#8377 ' .$row['course_original_price']. '</del></small> 
<span class="font-weight-bolder">&#8377 ' .$row['course_price']. '<span></p><a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetail.php?course_id='.$course_id.'">Enroll</a>
</div>
</div>
</a>';
    }
}
?>


</div>
<!--end most popular course 1st card deck-->

<!--start most popular course 2nd card deck-->
<div class="card-deck mt-4">
<?php
$sql="SELECT * FROM course LIMIT 3, 3";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row= $result->fetch_assoc()){
        $course_id= $row['course_id'];
        echo '<a href="coursedetail.php?course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px;">
<div class="card">
<image src="' . str_replace('..','.',$row['course_img']). '" class="card-img-top" alt="Guitar"/>
<div class="card-body">
<h5 class="card-title">' .$row['course_name']. '</h5>
<p class="card-text">' .$row['course_desc']. '</p>
</div>
<div class="card-footer">
<p class="card-text d-inline">Price: <small><del>&#8377 ' .$row['course_original_price']. '</del></small> 
<span class="font-weight-bolder">&#8377 ' .$row['course_price']. '<span></p><a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetail.php?course_id='.$course_id.'">Enroll</a>
</div>
</div>
</a>';
    }
}
?>



</div>
<!--end most popular course 2nd card deck-->
<div class="text-center m-2">
    <a class="btn btn-danger btn-sm" href="courses.php">View All Courses</a>
</div>
</div>

<!--end most popular courses-->

<!--start Contact Us-->
<?php
include('./contact.php');
?>
<!--end Contact Us-->

<!--start students testimonials-->

<div class="container-fluid mt-4" style="background-color: #4B7289;" id="Feedback">
    <h1 class="text-center testyheading p-4" style="color:white;">Students's  Feedback</h1>
    <div class="row">
        <div class="col-md-4">
            <div id="testimonial-slider" class="owl-carousel">

            <?php
            $sql="SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content 
            FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row= $result->fetch_assoc()){
                    $s_img = $row['stu_img'];
                    $n_img= str_replace('..','.',$s_img);
                
            ?>

                <div class="testimonial">
                    <p class="description" style="color:white;">
                       <?php  echo $row['f_content']; ?>
                    </p>
                    <div class="pic">
                        <img style="height: 100%;width:90%;" src="<?php echo $n_img; ?>" alt=" "/>
                    </div>
                    <div class="testimonial-prof" style="color: white;">
                        <h4><?php echo $row['stu_name'] ?></h4>
                        <small><?php echo $row['stu_occ']  ?></small>
                    </div>
                </div>
            <?php }
            }?>
            </div>
        </div>
        

    </div>
</div>

<!--end students testimonials-->

<div class="container-fluid bg-danger"> <!--start social follow-->
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook </a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter </a>  
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> Whatsapp </a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
    </div>
</div>  <!--end social follow-->

<!--start about section-->
<div class="container-fluid p-4" style="background-color: #e9ecef;">
    <div class="container" style="background-color: #e9ecef;">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>iSchhol provides universal access to the world's best education, partnering  with top universities  and organizations to offer courses online.</p>

            </div>
            <div class="col-sm">
                <h5>Category</h5>
                <a class="text-dark" href="#">Web development</a><br/>
                <a class="text-dark" href="#">Web Designing</a><br/>
                <a class="text-dark" href="#">Android App Dev</a><br/>
                <a class="text-dark" href="#">ios development</a><br/>
                <a class="text-dark" href="#">Data Analysis</a><br/>
            </div>

            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>iSchool Pvt Ltd<br> Near Lumbini Engineering College<br>Bhalwari,Tilottama-13,Rupandehi<br>Ph.071-544581</p>

            </div>
        </div>
    </div>
</div>  <!--end about section-->

<!-- start including footer-->
<?php
include('./mainInclude/footer.php');
?>
<!--end including footer-->