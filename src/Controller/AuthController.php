<?php

namespace App\Controller;

session_start();

use App\Model\ModelUser;

class AuthController
{

    public function authController($firstname, $lastname, $email, $password, $conf_pass) {

        $UserModel = new ModelUser();

        $check_user = $UserModel->rowCountUser($email);
        if($check_user !== 1 && $password === $conf_pass)
        {
            $UserModel->fakerUserDB($firstname, $lastname,$email,$password);
        }

    }
}

?>