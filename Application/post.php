<?php
    require_once 'models/autoloader.php';
    include_once 'controller/navigation.ctrl.php';
?>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 align-self-start">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Contact Us header-->
                            <header class="mb-8">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Create a new blog entry</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-3">Express your mind!</div>
                            </header>
                            <!-- Post content-->
                            <?php require_once 'controller/blogpost_ctrl.php';?>
                            
                            <section class="mb-5">
                                <form action="post.php" method= "POST" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Title</label>
                                        <input type="text" name = "title" class="form-control mb-1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Description</label>
                                        <textarea name = "description" class="form-control mb-1" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Content</label>
                                        <textarea name = "content" class="form-control mb-1" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
            
                                            <label for="exampleFormControlFile1"></label>
                                            <input type="file" name = "image" accept="image/png, image/jpg, image/jpeg" class="my-3" id="exampleFormControlFile1">
                                        </div>
                                        <label class="mb-1 mt-3">Categories</label>
                                        <div class="row">
                                        <?php 
                                            $category_types = new category_types();
                                            $cat_result = $category_types->findAll();
                                            foreach($cat_result as $cat_data){
                                        ?>
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" name = "category_checkbox[]" type="checkbox" value="<?php echo $cat_data['id']; ?>" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1"><?php echo $cat_data['name'];?></label>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <button type="submit" name = "submit" class="btn btn-primary mt-5">Post</button>
                                </form>
                            </section>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
                <!-- Side widgets-->
                <?php include_once 'controller/widget.ctrl.php';?>

            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
