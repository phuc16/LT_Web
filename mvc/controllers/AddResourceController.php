<?php
    class AddResourceController extends Controller {
        function Show() {
            $resource = $this->model('AdminModel');  
            $this->view("addResource", []);
            if(isset($_POST['addResource'])) {
                
                $id = $_POST['id'];
                $type = $_POST['type'];
                $name = $_POST['name'];
                $content = $_POST['content'];
                
                $resource->addResource($id, $type, $name, $content);

            }
           
        }
    }
?>