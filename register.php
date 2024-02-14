<?php
session_start();

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "You Are Already Registered In";
    header("Location: index.php");
    exit(0);
}
    include('includes/header.php');
    include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5">

                <?php include('message.php'); ?>
                
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">

                        <form action="registercode.php" method="POST" >

                            <div class="form-group mb-3 ">
                                <lable>First Name</lable>
                                <input required type="text" name="fname" placeholder="Enter First Name" class="form-control">
                            </div>

                            <div class="form-group mb-3 ">
                                <lable>Last Name</lable>
                                <input required type="text" name="lname" placeholder="Enter Last Name" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3 ">
                                <lable>Email Id</lable>
                                <input required type="email" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>

                            <div class="form-group mb-3 ">
                                <lable>Password</lable>
                                <input required type="password" name="password" placeholder="Enter Password" class="form-control">
                            </div>

                            <div class="form-group mb-3 ">
                                <lable>Confirm Password</lable>
                                <input required type="password" name="cpassword" placeholder="Enter Confirm Password" class="form-control">
                            </div>

                            <div class="form-group mb-3 ">
                                <button required type="submit" name="register_btn" class="btn btn-primary" >Register now</button>
                            </div>

                        </form>

                    </div> 
                </div>                   
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');    
?>