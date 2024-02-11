<?php
// session_start();
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
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">                        
                            
                        <div class="form-group mb-3 ">
                            <lable>Email Id</lable>
                            <input required type="email" name="email" placeholder="Enter Email Address" class="form-control">
                        </div>

                        <div class="form-group mb-3 ">
                            <lable>Password</lable>
                            <input required type="password" name="password" placeholder="Enter Password" class="form-control">
                        </div>                            

                        <div class="form-group mb-3 ">
                            <button required type="submit" name="register_btn" class="btn btn-primary" >Login now</button>
                        </div>                      

                    </div> 
                </div>                   
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');    
?>