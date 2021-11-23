<?php
    class PrintingInkController extends Controller {
        function Show() {
            $printingInk = $this->model("ProductsModel");
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("content", ["Page" => "printingInk", 
                                    "PrintingInk" => $printingInk->getPrintingInk()]);
            $this->view("footer", []);
        }
    }
?>