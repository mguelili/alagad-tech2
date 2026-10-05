<?= view('templates/header', ['title' => 'Welcome']) ?>

<h1>Today's Tasks</h1>

<p class="date">
    Tasks scheduled for <?= esc(date('F j, Y', strtotime($today))) ?>
</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Task Title</th>
            <th>Status</th>
            <th>Task Date</th>
        </tr>
    </thead>

    <tbody>
        <?php if (! empty($tasks)): ?>
            <?php foreach ($tasks as $task): ?>
                <?php $statusClass = str_replace(' ', '-', strtolower($task['status'])); ?>

                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td>
                        <span class="status <?= esc($statusClass) ?>">
                            <?= esc(ucwords($task['status'])) ?>
                        </span>
                    </td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No tasks are scheduled for today.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>