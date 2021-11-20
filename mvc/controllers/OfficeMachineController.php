<?php
    class OfficeMachineController extends Controller {
        function Show() {
            $officeMachine = $this->model("ProductsModel");
            $this->view("header", []);
            $this->view("content", ["Page"=>"officeMachine",
                                    "OfficeMachine" => $officeMachine->getOfficeMachine()]);
            $this->view("footer", []);
        }
    }
?>