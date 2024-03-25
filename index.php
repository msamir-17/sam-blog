<?php 
session_start();
include('admin/config/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-white" >Category</h3>             
                <div class="underline"></div>   

            </div>
            <?php
                $homeCategory = "SELECT * FROM categories WHERE navbar_status ='0' AND status = '0' LIMIT 12 ";
                $homeCategory_run = mysqli_query($con , $homeCategory);


                if(mysqli_num_rows($homeCategory_run) > 0){
                    foreach($navbarCategory_run as $homeCategoryitems)
                    {                        
                        ?>
                            <div class="col-md-3 mb-4">
                            <a class="text-decoration-none " href="category.php?title=<?= $homeCategoryitems['slug']; ?>" ></a>                            
                            <div class="card card-body"></div>
                                <?= $homeCategoryitems['name']; ?>
                            </div>
                        <?php 
                    }
                }
            ?>
        </div>
    </div>
</div>
<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-white" >SAM-BLOG WEB </h3>             
                <div class="underline"></div> 
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum dolorem ipsam consequuntur deleniti omnis vero, nulla in sunt delectus consectetur molestiae, nesciunt quaerat sint vitae aliquam, harum animi facere corrupti.
                    Voluptatum fugit totam sit illum neque illo, dolores officiis quia necessitatibus sapiente eaque reiciendis earum maiores dolorem! Placeat consequatur commodi, veniam non pariatur ad impedit ipsum facilis deleniti laborum fugit?
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark" >Latest Post</h3>             
                <div class="underline"></div>  
                <?php
                    $homePosts = "SELECT * FROM posts WHERE  AND status = '0' ORDER BY id DESC LIMIT 12 ";
                    $homePosts_run = mysqli_query($con , $homePosts);

                    if(mysqli_num_rows($homePosts_run) > 0){
                        foreach($homePosts_run as $homePostsitems)
                        {                        
                            ?>
                                <div class="mb-4">
                                <a class="text-decoration-none " href="post.php?title=<?= $homePostsitems['slug']; ?>" ></a>                            
                                <div class="card card-body bg-light "></div>
                                    <?= $homePostsitems['name']; ?>
                                </div>
                            <?php 
                        }
                    }
                ?>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Reach Us</h4>
                    </div>
                    <div class="card-body">
                        sam-blog@gmail.com
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php 
include('includes/footer.php');
?>