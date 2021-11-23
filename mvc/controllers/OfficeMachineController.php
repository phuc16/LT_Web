<?php
    class OfficeMachineController extends Controller {
        function Show() {
            $officeMachine = $this->model("ProductsModel");
            $intro = $this->model("IntroModel");
            $this->view("header", ["LogoTitle"=>$intro->getLogo(), "LogoBrand"=>$intro->getLogo()]);
            $this->view("content", ["Page"=>"officeMachine",
                                    "OfficeMachine" => $officeMachine->getOfficeMachine()]);
            $this->view("footer", []);
        }
    }
?>