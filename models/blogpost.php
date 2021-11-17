<?php
    require_once 'model.php';
    
    class blogpost extends model {

        function __construct(){
            parent::__construct("blog_post");
        }
    }