<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Welcome</a> |
        <a href="<?= site_url('tasks') ?>">Task List</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <h1>Demo User Profile</h1>

    <p>Username: <?= esc($user['username']) ?></p>
    <p>Full Name: <?= esc($user['full_name']) ?></p>
    <p>Email: <?= esc($user['email']) ?></p>
</body>
</html>