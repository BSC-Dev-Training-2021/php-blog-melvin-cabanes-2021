<?php
    require_once 'models/model.php';
    class category_types extends model {

        function __construct(){
            parent::__construct("category_types");
        }
    }

    function findByCategoryName($categoryName){
        $result = $this->conn->query("SELECT * FROM blog_post INNER JOIN blogpost_categories
                                    ON blogpost_categories.blogpost_id = blog_post.id
                                    INNER JOIN category_types ON category_types.id = blogpost_categories.category_id
                                    where category_types.name = '$categoryName'");
        return $result;
    }