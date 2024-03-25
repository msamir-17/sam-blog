<?php 
session_start();
include('admin/config/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
           <div class="col-md-9">
           <?php
                    if(isset($_GET['title'])){
                        $slug = mysqli_real_escape_string($con, $_GET['title'] );

                        $posts = "SELECT * FROM posts WHERE slug='$slug' ";
                        $posts_run = mysqli_query($con, $posts);

                        if(mysqli_num_rows($posts_run) > 0){
                           
                            foreach($posts_run as $postsItems){
                                ?>
                                    <div class="card shadow-sm mb-4 ">
                                        <div class="card-header">
                                            <h5><?=$postsItems['name'];?> </h5>
                                        </div>

                                        <div class="card-body" >
                                            <label class="text-dark me-2" >Posted On: <?= date('d-M-Y', strtotime($postsItems['created_at']));?></label>
                                            <hr/>
                                            <?php if($postsItems['image'] != null) : ?>
                                            <img src="uploads/posts/<?=$postsItems['image'];?>" class="w-25" alt="<?=$postsItems['name'];?>">
                                            <?php endif; ?>
                                            <div>
                                                <?=$postsItems['description'];?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <?php
                            }                      
                        }
                        else{
                            ?>
                                <h4>No Such Post Found</h4>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <h4>No Such Url Found</h4>
                        <?php
                    }
                ?>
           </div>
           <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Advertise here</h4>
                    </div>
                    <div class="card-body">
                        your advertise
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>


<?php 
include('includes/footer.php');
?>