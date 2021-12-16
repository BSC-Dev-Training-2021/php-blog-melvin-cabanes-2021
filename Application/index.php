<?php
    require_once 'models/autoloader.php';
    include_once 'controller/navigation.ctrl.php';
?>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">WELCOME TO BLOGPOST!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <?php
                        $blogpost = new blogpost();
                        include_once 'controller/blogpost_ctrl.php';
                    ?>
                    <?php foreach($blogpost_result as $blogpost_data){;?>
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src= <?php echo 'uploads/'.$blogpost_data['img_link'];?> alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?php echo date("jS F, Y", strtotime($blogpost_data['created']));?></div>
                                <h2 class="card-title"><?php echo $blogpost_data['title']; ?></h2>
                                <p class="card-text"><?php echo $blogpost_data['description']; ?></p>
                                <a class="btn btn-primary" name = 'btn' href="article.php?id=<?php if(isset($_GET['value'])){ echo $blogpost_data['blogpost_id'];
                                    }else{
                                        echo $blogpost_data['id'];
                                }?>">Read more →</a>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Nested row for non-featured blog posts-->
                    
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
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