<?php
    require_once 'models/model.php';
    class blogpost_categories extends model {

        function __construct(){
            parent::__construct("blogpost_categories");
        }
        function insertCatIds($blog_id, $cat_ids){
            foreach($cat_ids as $cat_value){

                $blogpost_cat = array(
                'blogpost_id' => $blog_id,
                'category_id' => $cat_value
                );
            $this->insert($blogpost_cat);
            }
        }
    }
