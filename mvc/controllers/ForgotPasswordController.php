<?php
    class ForgotPasswordController extends Controller {
        function Show() {
            $this->view("forgotPassword", []);
        }
    }
?>