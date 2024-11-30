<?php
    include_once "../UserController.php";
    $user_controller = new UserController();

    session_start();

    if (isset($_POST['login'])) {
        $request = array(
            'email' => isset($_POST['email']) ? $_POST['email'] : '',
            'password' => isset($_POST['password']) ? base64_encode($_POST['password']) : '',
            'role' => isset($_POST['role']) ? $_POST['role'] : '',
        );

        $login = $user_controller->login($request);

        if ($login['success']) {
            $_SESSION['login_data'] = $login['data'];
            header('location:../../dashboard.php');
        } else {
            $_SESSION['invalid'] = true;
            header('location:../../index.php');
        }
    }


?>