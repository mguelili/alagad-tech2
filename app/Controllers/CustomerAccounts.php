<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerAccounts extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        return view('customers/index', [
            'customers' => $customerModel->findAll(),
        ]);
    }
}
