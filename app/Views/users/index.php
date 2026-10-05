<?= view('templates/header', ['title' => 'User Accounts']) ?>

<h1>User Accounts</h1>
<p>User records loaded from the MySQL database.</p>

<?php if (! empty($users)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['id']) ?></td>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No user records were found.</p>
<?php endif; ?>

<?= view('templates/footer') ?>
