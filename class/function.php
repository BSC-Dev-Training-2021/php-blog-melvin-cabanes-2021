<?php
require_once 'models/model.php';
public function insertData(){
    
    if (isset($_POST['submit'])) {

        $title=$_POST['title'];
        $description=$_POST['description'];
        $content = $_POST['content'];
    
        $dataToInsert = array(
            'title' => $title,
            'description' => $description,
            'content' => "$content",
            'created_by' => 1
        ); 
    
    
        $blogpost_obj->insert($dataToInsert);
    
}