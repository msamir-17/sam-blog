<?php
    include('authentication.php');    
?>   
<?php
    // include('config/dbcon.php');
    include('includes/header.php');    
?>   

<div class="container ">
    
    <div class="row mt-4">
        <div class="col-md-12">
        <?php include('message.php');?>

            <div class="card">
                <div class="card-header">
                    <h3>View Post
                        <a href="post-add.php" class="btn btn-primary float-end" >Add Post</a>
                    </h3>
                </div>
                <div class="card-body"> 
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Category_id</td>
                                    <td>Image</td>
                                    <td>Status</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // $posts = "SELECT * FROM posts WHERE status!='2'";
                                    $posts = "SELECT p.*, c.name AS cname FROM posts p, categories c WHERE c.id = p.category_id ";
                                    // $posts_run = mysqli_query($con, $posts);
                                    $posts_run = mysqli_query($con, $posts);

                                    if(mysqli_num_rows($posts_run) > 0)
                                    {
                                        foreach($posts_run as $post)
                                        {
                                            ?>
                                                <tr>
                                                    <td> <?= $post['id']?></td>                                                     
                                                    <td> <?= $post['name']?></td>                                                     
                                                    <td> <?= $post['cname']?></td>                                                     
                                                    <td>
                                                        <img src="../uploads/posts<?= $post['image']?> " width="60px" height="60px" >
                                                    </td>

                                                    <td>
                                                        <?= $post['status'] =='1' ? 'Hidden' : 'Visible' ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="post-edit.php?id=<?= $post['id']?>" class="btn btn-success" >Edit</a>
                                                    </td> 
                                                    
                                                    <td>
                                                        <form action="code.php" method="POST" >
                                                            <button type="submit" class="btn btn-danger" name="post_delete_btn" value="<?= $post['id']?>" >Delete</button>
                                                        </form>
                                                    </td> 
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="6" >No Record Found</td>
                                            </tr>
                                        <?php
                                    }

                                ?>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');    
    include('includes/scripts.php'); ?>       
