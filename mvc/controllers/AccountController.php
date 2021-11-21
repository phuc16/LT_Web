<?php
    class AccountController extends Controller {
        function Show() {
            $account = $this->model("AccountModel");
            $this->view("header", []);
            $this->view("content", ["Page"=>"account",
                                    "Account"=>$account->getInfo()]);
            $this->view("footer", []);
        }
    }
?>