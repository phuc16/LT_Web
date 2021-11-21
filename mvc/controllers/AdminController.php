<?php
    class AdminController extends Controller {
        function Show() { 
            $admin = $this->model('AdminModel');
            $this->view("admin", [
                'Contacts'=>$admin->getContacts(),
                'Products'=>$admin->getProducts(),
                'Posts'=>$admin->getPosts()
            ]);
            if (isset($_POST['contactsEdit'])) {
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $mail = $_POST['mail'];
                if (preg_match('/^[0-9]+$/i', $phone) && strlen($address) > 0 && strlen($phone) > 0 && strlen($mail) > 0 && strlen($phone) <= 10 && preg_match('/^.*@.*\..*/i', $mail)){
                    $admin->editContacts($address, $phone, $mail);
                    header('Refresh: 0');
                }
                else echo   '<div class="text-danger text-center">
                                <strong>Invalid input!</strong>
                            </div>';          
            }
            if (isset($_POST['postDelete'])){
                $id = $_POST['id'];
                $admin->deletePost($id);
                header('Refresh: 0');
            }
            if (isset($_POST['productDelete'])){
                $id = $_POST['id'];
                $admin->deleteProduct($id);
                header('Refresh: 0');
            }
        }
    }
?>