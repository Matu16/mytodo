<?php require_once('partials/head.php'); ?>
<h2>Lisa ülesanne</h2>

<form action="/task" method="post">
    <input type="text" name="task">
    <input type="submit" value="Send">
</form>

<h2>To do list</h2>
    <ul>
        <?php foreach ( $tasks as $task ): ?>
            <li>
                <?php if ( $task->completed ): ?>
                    <strike>
                <?php endif; ?>

                <?= $task->description; ?>

                <?php if ( $task->completed ): ?>
                </strike>
                <?php endif; ?>
            </li>
        <?php endforeach;  ?>
    </ul>

<?php require_once('partials/head.php'); ?>

