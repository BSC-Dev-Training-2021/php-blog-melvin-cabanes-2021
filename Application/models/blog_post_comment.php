<?php
    require_once 'models/model.php';
    class blog_post_comment extends model {

        function __construct(){
            parent::__construct("blog_post_comment");
        }
        function insertComments($blog_id, $comment){
            foreach($comment as $comment_value){

                $blogpost_comments = array(
                'blog_post_id' => $blog_id,
                'comment' => $comment
                );
            }
            $this->insert($blogpost_comments);
            }
    }
