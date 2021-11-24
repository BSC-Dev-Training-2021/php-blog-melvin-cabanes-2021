<?php   
    require_once 'models/autoloader.php';
    include_once 'controller/navigation.ctrl.php';
?>
<div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Coming Soon</h1>

                            <?php 
                                $category_types = new category_types();

                                if (isset($_POST['add'])) {
                                    $getCategory = htmlentities($_POST['categoryName'], ENT_QUOTES);
                                }
                                $insertToCategory = array(
                                    'name'=>$getCategory??""
                                );
                                $category_types->insert($insertToCategory);
                            ?>
                            <form action="" method="POST">
                                <div class="input-group flex-nowrap my-5">
                                    <input type="text" class="form-control" name = "categoryName" placeholder="Enter a new category..." aria-label="Category" aria-describedby="addon-wrapping">
                                    <button class="btn btn-success" name = "add" id="button-search" type="submit">Add</button>
                                </div>
                            </form>
                            
                        </header>
                    </article>
                </div>
               <?php include_once 'controller/widget.ctrl.php';?>
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
