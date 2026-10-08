<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        $taskModel = new TaskModel();

        return view('tasks/welcome', [
            'tasks' => $taskModel
                ->where('task_date', date('Y-m-d'))
                ->orderBy('created_at', 'ASC')
                ->findAll(),

            'today' => date('F j, Y'),
        ]);
    }

    public function taskList(): string
    {
        $taskModel = new TaskModel();

        return view('tasks/task_list', [
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->orderBy('created_at', 'ASC')
                ->findAll(),
        ]);
    }

    public function profile(): string
    {
        $userModel = new UserModel();

        return view('tasks/profile', [
            'user' => $userModel->first(),
        ]);
    }

    public function about(): string
    {
        return view('tasks/about');
    }
}