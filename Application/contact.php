<?php
    require_once 'models/autoloader.php';
    include_once 'controller/navigation.ctrl.php';
?>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 align-self-start">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Contact Us header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Contact Us</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-3">We would like to hear from you!</div>
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <form>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="mb-1">Full Name</label>
                                        <input type="text" class="form-control mb-1" id="formGroupExampleInput" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2" class="mb-1">Email</label>
                                        <input type="text" class="form-control mb-1" id="formGroupExampleInput2" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Message</label>
                                        <textarea class="form-control mb-1" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
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
