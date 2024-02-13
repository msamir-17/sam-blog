<?php
    include('authentication.php');    
?>   
<?php
    // include('config/dbcon.php');
    include('includes/header.php');    
?>   

<div class="container ">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item ">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Registered User</h3>

                </div>
                <div class="card-body">
                    <div class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Email</td>
                                <td>Role</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $row){
                                        ?>
                                            <tr>
                                                <td><?=$row['id']; ?></td>                                                
                                                <td><?=$row['fname']; ?></td>                                                
                                                <td><?=$row['lname']; ?></td>                                                
                                                <td><?=$row['email']; ?></td>                                                
                                                <td>
                                                    <?php
                                                        if($row['role_as'] == '1'){
                                                            echo 'admin'
                                                        }
                                                        else($row['role_as'] == '0'){
                                                            echo 'user'
                                                        }
                                                    
                                                    ?>
                                                </td>                                                
                                                <td><a href="edit-register.php" class="btn btn-success" >Edit</a></td>                                                
                                                <td><button type="button" class="btn btn-danger" >Delete</button></td>                                                
                                            </tr>
                                        
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                        <tr>
                                            <td colspan="6"> No Record</td>
                                        </tr>
                                    <?php
                                }
                            
                            ?>
                            
                        </tbody>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
    include('includes/footer.php');    
    include('includes/scripts.php'); ?>       

