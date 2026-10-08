<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksAndUsersSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $tomorrow = date('Y-m-d', strtotime('+1 day'));
        $now = date('Y-m-d H:i:s');

        $tasks = [
            [
                'title' => 'Review database schema',
                'status' => 'completed',
                'task_date' => $today,
                'created_at' => $now,
            ],
            [
                'title' => 'Finish CodeIgniter controller',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => $now,
            ],
            [
                'title' => 'Test task list page',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => $now,
            ],
            [
                'title' => 'Prepare project README',
                'status' => 'pending',
                'task_date' => $today,
                'created_at' => $now,
            ],
            [
                'title' => 'Create application wireframe',
                'status' => 'completed',
                'task_date' => $yesterday,
                'created_at' => $now,
            ],
            [
                'title' => 'Configure database connection',
                'status' => 'completed',
                'task_date' => $yesterday,
                'created_at' => $now,
            ],
            [
                'title' => 'Upload project to GitHub',
                'status' => 'pending',
                'task_date' => $tomorrow,
                'created_at' => $now,
            ],
            [
                'title' => 'Deploy hosted version',
                'status' => 'pending',
                'task_date' => $tomorrow,
                'created_at' => $now,
            ],
        ];

        $this->db->table('tasks')->insertBatch($tasks);

        $this->db->table('users')->insert([
            'username' => 'kyle',
            'full_name' => 'KYLE CHRISTIAN MIRANDA',
            'email' => 'your-email@example.com',
            'created_at' => $now,
        ]);
    }
}