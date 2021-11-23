<?php
$blogpost = new blogpost(); 
$blogpost_categories = new blogpost_categories();
if (isset($_POST['submit'])) {

    $title=htmlentities($_POST['title'], ENT_QUOTES);
    $description=htmlentities($_POST['description'], ENT_QUOTES);
    $content=htmlentities($_POST['content'], ENT_QUOTES);
    $image = $_FILES['image'];
    $chkBox = $_POST['category_checkbox'];
 
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
              echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
    }                       
    $insertToBlogpost = array(
        'title' => htmlentities($title),
        'description' => htmlentities($description),
        'content' => htmlentities($content),
        'img_link' => $_FILES['image']['name'],
        'created_by' => 1

    );
  $categType = $_POST['category_checkbox']; 
                                    
  $returnBlogpostId = $blogpost->insert($insertToBlogpost);
  $blogpostCat = new blogpost_categories();
  $blogpostCat->insertCatIds($returnBlogpostId ,$categType);
}
  if(isset($_POST['postSubmit'])){
   $comments = htmlentities($_POST['comments'], ENT_QUOTES);
   $blogpostIds = $_GET['id'];
  
  $insertToComments = array(
    'comment'=>$comments,
    'blog_post_id'=>$blogpostIds
  
  );
  $blog_post_comment = new blog_post_comment();
  $blog_post_comment->insert($insertToComments);
  
 }
//////////////displaying selected category
if(isset($_GET['value'])){
                            
  $blogpost_result = $blogpost->findByCategoryName($_GET['value']);
}else{
  
  $blogpost_result = $blogpost->findAll();
}

 /////////////////for comments
 $blog_post_comment = new blog_post_comment();
 $findCommentsByBlogId = array(
     'blog_post_id' => $_GET['id']??""
     );

 $result = $blog_post_comment->findById($findCommentsByBlogId);

 ///////////////////////////////////displaying category types per blogpost
 

 