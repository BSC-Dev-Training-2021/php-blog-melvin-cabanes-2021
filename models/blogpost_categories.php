<?php
    require_once 'model.php';
    
    class blogpost_categories extends model {

        function __construct(){
            parent::__construct("blog_post_categories");
        }
    }