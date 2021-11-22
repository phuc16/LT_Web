<?php
    class UpdateResourceController extends Controller {
        function Show() {     
            $updateResource = $this->model('UpdateResourceModel');   
            $resourceId = "";
            if (isset($_POST['id'])) {
                $resourceId = $_POST['id'];
            } else {
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
            } 
            $this->view("updateResource", [
                'PostId'=>$updateResource->getResourceId($resourceId)
            ]);
            if(isset($_POST['resourceUpdate'])) {
                $id = $_POST['id'];
                $type = $_POST['type'];
                $name = $_POST['name'];
                $content = $_POST['content'];
                
                $updateResource->updateResource($id, $type, $name, $content);
                header('Location: ./admin');
            }
        }
    }
?>