<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo $name = $_POST['name'] ?? '';
    echo $lastName = $_POST['lastName'] ?? '';
    echo $email = $_POST['email'] ?? '';
    echo $message = $_POST['message'] ?? '';
}
