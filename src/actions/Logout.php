<?php
    include_once "../UserController.php";
    $user_controller = new UserController();

    session_start();
    if (isset($_SESSION['login_data'])) {
        $data = [
            'user_id' => $_SESSION['login_data']['id'],
            'last_active_flg' => true,
            'is_online_flg' => OFFLINE
        ];
        $user_controller->update($data);

        session_destroy();
        header('location:../../index.php');
    }

?>