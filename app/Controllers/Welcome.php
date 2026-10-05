<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Welcome extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = [
            'today' => date('Y-m-d'),
            'tasks' => $taskModel->getTodayTasks(),
        ];

        return view('welcome/index', $data);
    }
}