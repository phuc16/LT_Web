<?php
    class PrinterController extends Controller {
        function Show() {
            $printer = $this->model("ProductsModel");
            $this->view("header", []);
            $this->view("content", ["Page"=>"printer",
                                    "Printer" => $printer->getPrinter()]);
            $this->view("footer", []);
        }
    }
?>