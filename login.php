<?php
include('includes/header.php');

if(isset($_SESSION['auth']))
{
    // if(!isset($_SESSION['message'])){
    $_SESSION['message'] = "You Are Already Logged In";

    // }
    header("Location: index.php");
    exit(0);
}

include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5">

                <?php include('message.php'); ?>
                
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body"> 
                                               
                    <form action="logincode.php" method="POST">     
                        <div class="form-group mb-3 ">
                            <lable>Email Id</lable>
                            <input required type="email" name="email" placeholder="Enter Email Address" class="form-control">
                        </div>

                        <div class="form-group mb-3 ">
                            <lable>Password</lable>
                            <input required type="password" name="password" placeholder="Enter Password" class="form-control">
                        </div>                            

                        <div class="form-group mb-3 ">
                            <button required type="submit" name="login_btn" class="btn btn-primary" >Login now</button>
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