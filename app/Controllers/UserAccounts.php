<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserAccounts extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        return view('users/index', [
            'users' => $userModel->findAll(),
        ]);
    }
}
