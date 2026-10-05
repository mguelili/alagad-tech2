<?= view('templates/header', ['title' => 'Profile']) ?>

<h1>User Profile</h1>

<?php if (! empty($user)): ?>
    <div class="profile-card">
        <div class="profile-row">
            <strong>User ID:</strong>
            <?= esc($user['id']) ?>
        </div>

        <div class="profile-row">
            <strong>Username:</strong>
            <?= esc($user['username']) ?>
        </div>

        <div class="profile-row">
            <strong>Full Name:</strong>
            <?= esc($user['full_name']) ?>
        </div>

        <div class="profile-row">
            <strong>Account Created:</strong>
            <?= esc($user['created_at']) ?>
        </div>
    </div>
<?php else: ?>
    <p>No user profile was found.</p>
<?php endif; ?>

<?= view('templates/footer') ?>
