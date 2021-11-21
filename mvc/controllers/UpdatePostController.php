<?php
    class UpdatePostController extends Controller {
        function Show() {     
            $updatePost = $this->model('UpdatePostModel');       
            $this->view("updatePost", [
                'PostId'=>$updatePost->getPostId($_POST['id'])
            ]);
            
            if(isset($_POST['postUpdate'])) {
                $id = $_POST['id'];
                $title = $_POST['title'];
                $SEOkey = $_POST['SEOkey'];
                $description = $_POST['description'];
                $content = $_POST['content'];
                // echo "<script>console.log(\"Debug Objects: " . $content . " \" );</script>";
                if(strlen($title) > 0 && strlen($SEOkey) > 0 && strlen($description) > 0 && strlen($content) > 0) {
                    $updatePost->updatePost($id, $title, $SEOkey, $description, $content);
                    header('Location: ./admin');
                }
                else echo   '<div class="text-danger text-center">
                                <strong>Invalid input!</strong>
                            </div>';
            }
        }
    }
?>