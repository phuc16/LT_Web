<?php
    class PrintingInkController extends Controller {
        function Show() {
            $printingInk = $this->model("ProductsModel");
            $this->view("header", []);
            $this->view("content", ["Page" => "printingInk", 
                                    "PrintingInk" => $printingInk->getPrintingInk()]);
            $this->view("footer", []);
        }
    }
?>