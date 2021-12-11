<?php
    require_once 'models/autoloader.php';
    include_once 'controller/navigation.ctrl.php';
?>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo $blogpost_result['title'];?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on <?php echo date("jS F, Y", strtotime($blogpost_result['created_updated']));?></div>
                            <!-- Post categories-->
                        <?php
                        //get the Id of category_id from blogpost_categories
                        foreach($resultArr as $value){
                        ?>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!"><?php echo $value['name']?></a>
                        <?php } ?>

                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src= <?php echo 'uploads/'.$blogpost_result['img_link'];?> alt="..." /></a></figure>
                        <!-- Post content-->
                        
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo $blogpost_result['description'];?></p>
                            <p class="fs-5 mb-4"><?php echo $blogpost_result['content'];?></p>
                        </section>
                        
                    </article>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <?php 
                                    include_once 'controller/blogpost_ctrl.php';
                                ?>
                                <form class="mb-4" action = "" method = "POST">
                                    <div>
                                        <textarea class="form-control mb-2" name = "comments" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" name = "postSubmit" class="btn btn-primary">Post Comment</button>
                                    </div>
                                </form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    
                                    <div class="ms-3">
                                        <?php
                                        include_once 'controller/blogpost_ctrl.php';
                                        foreach($result as $values){?>
                                            
                                        <div class="d-flex">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Melvin Cabanes</div>
                                                <?php echo $values['comment']?>
                                            </div>
                                        </div>
                                       <?php } ?>
                                        <!-- Child comment 2-->
                                    </div>
                                </div>
                                <!-- Single comment-->
                            </div>
                        </div>
                    </section>
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
