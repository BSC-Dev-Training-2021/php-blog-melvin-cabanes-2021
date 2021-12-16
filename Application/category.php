<?php   
    require_once 'models/autoloader.php';
    include_once 'controller/navigation.ctrl.php';
?>
<div class="container mt-5">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Coming Soon</h1>

                            <?php 
                                $category_types = new category_types();
                                include_once 'controller/blogpost_ctrl.php';
                            ?>

                            <?php

                            if(isset($_POST['update'])){
                                $data = array (
                                    
                                    array('id' => $_POST['categoryID']),
                                    array('name' => $_POST['updatedCategory'])
                                );


                               $category_types = new category_types();
                               $category_types->update($data); 
                            }
                                if( isset($_GET['category_id']) ) {
                                    echo '<form action="" method = "POST">
                                            <a href = "category.php" class="btn btn-success mt-4" name = "add" type="submit">New Category</a>
                                            <div class="input-group flex-nowrap my-3">
                                                    <input type="hidden" name = "categoryID" value="' .$_GET['category_id']. '">
                                                    <input type="text" class="form-control" name = "updatedCategory" value ="' .$_GET['name']. '">
                                                    <button class="btn btn-success" name = "update"  type="submit">Update</button>
                                            </div>
                                        </form>';
                                } else {
                                    echo '<form action="" method="POST">
                                            <div class="input-group flex-nowrap my-5">
                                                <input type="text" class="form-control" name = "categoryName" placeholder="Enter a new category..." aria-label="Category" aria-describedby="addon-wrapping">
                                                <button class="btn btn-success" name = "add" id="button-search" type="submit">Add</button>
                                            </div>
                                        </form>';
                                    }
                            ?>
                        </header>
                    </article>
                </div>
               <!-- Side widgets-->
                <div class="col-lg-5 ">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <?php 
                    include_once 'controller/blogpost_ctrl.php';
                    $getCat_names = $category_types->findAll();
                    ?>
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="container">
                            <div class="row">
                                    <div class="col-sm-8">
                                        <?php foreach($getCat_names as $value){?>
                                            <ul class="list-unstyled mb-3">
                                                <li class = "my-1"><a href="index.php?value=<?php echo $value['name'];?>"><?php echo $value['name'];?></a></li>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-4">
                                    <?php foreach($getCat_names as $value){?>
                                        <a href="category.php?category_id=<?php echo $value['id'];?>&name=<?php echo $value['name'];?>" class="btn btn-success btn-sm my-1">Update</a>
                                        <a href="category.php?delete=<?php echo $value['id'];?>" class="btn btn-danger btn-sm my-1">Delete</a>
                                    <?php } ?>
                                    </div>
                            </div>
                        </div>
                        
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                        <br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>


            </div>
        </div>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
