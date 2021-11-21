<?php
    class AdminController extends Controller {
        
        function Show() { 
            $admin = $this->model("AdminModel");
            $this->view("admin", [
                            "getMember" => $admin->getMember(),
                            "getComment" => $admin->getComment(),
                            "getResource" => $admin->getResource()

                        ]);
            // DELETE MEMBER
            if (isset($_POST['deleteMember'])){
                $username = $_POST['username'];
                $admin->deleteMember($username);
               
            };
            // ACCEPT COMMENT
            if (isset($_POST['acceptComment'])){
                $id = $_POST['id'];
                $admin->acceptComment($id);
               
            }
            // DELETE COMMENT
            if (isset($_POST['deleteComment'])){
                $id = $_POST['id'];
                $admin->deleteComment($id);
               
            }
            // DELETE RESOURCE
            if (isset($_POST['deleteResource'])){
                $id = $_POST['id'];
                $admin->deleteResource($id);
               
            }
        }
    }
?>