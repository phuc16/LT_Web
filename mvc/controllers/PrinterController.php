<?php
    class PrinterController extends Controller {
        function Show() {
            $printer = $this->model("ProductsModel");
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("content", ["Page"=>"printer",
                                    "Printer" => $printer->getPrinter()]);
            $this->view("footer", []);
        }
    }
?>