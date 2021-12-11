<?php
    require_once 'models/autoloader.php';
    include_once 'controller/navigation.ctrl.php';
?>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">Messages</h1>
                    </header>
                    <!-- Submitted messages -->
                    <section>
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Ramil Cunanan </h5>
                                <div class="small text-muted">November 15, 2021</div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Ramil Cunanan</h5>
                                <div class="small text-muted">November 15, 2021</div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
