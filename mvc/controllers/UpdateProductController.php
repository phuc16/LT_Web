<?php
    class UpdateProductController extends Controller {
        function Show() {     
            $updateProduct = $this->model('UpdateProductModel'); 
            $productId = "";
            if (isset($_POST['id'])) {
                $productId = $_POST['id'];
            } else {
                echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
            }
            $this->view("updateProduct", [
                'ProductId'=>$updateProduct->getProductId($productId)
            ]);
            
            if(isset($_POST['postUpdate'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $image = $_POST['image'];
                $type = $_POST['type'];
                $quantity = $_POST['quantity'];
                $description = $_POST['description'];
                // echo "<script>console.log(\"Debug Objects: " . $price . " \" );</script>";
                if(strlen($name) > 0 && strlen($name) <= 255 && strlen($price) > 0 && preg_match('/^[0-9]+$/i', $price) && strlen($image) > 0 && strlen($type) > 0 && strlen($type) <= 20 && strlen($quantity) > 0 && preg_match('/^[0-9]+$/i', $quantity) && strlen($description) > 0) {
                    $updateProduct->updateProduct($id, $name, $price, $image, $type, $quantity, $description);
                    header('Location: ./admin');
                }
                else echo   '<div class="text-danger text-center">
                                <strong>Invalid input!</strong>
                            </div>';
            }
        }
    }
?>