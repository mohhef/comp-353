<?php
require("../../controllers/AuthController.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $username = $_POST['username'];

    $auth = new AuthController();
    $result = $auth->forgotPasswordEmployee($username);
    if($result) {
        echo json_encode(array('result' => true));
    }else{
        echo json_encode(array('result' => false));
    }
}
