<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Welcome</a> |
        <a href="<?= site_url('tasks') ?>">Task List</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <h1>Tasks for Today</h1>
    <p>Today is <?= esc($today) ?></p>

    <?php foreach ($tasks as $task): ?>
        <h2><?= esc($task['title']) ?></h2>
        <p>Status: <?= esc($task['status']) ?></p>
        <p>Date: <?= esc($task['task_date']) ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>