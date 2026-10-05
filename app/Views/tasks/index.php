<?= view('templates/header', ['title' => 'Task List']) ?>

<h1>Complete Task List</h1>

<p>All tasks are displayed below and ordered by task date.</p>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Task Title</th>
            <th>Status</th>
            <th>Task Date</th>
            <th>Created At</th>
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
                    <td><?= esc($task['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No task records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>