<?php

    require_once('assets/header.php');
    
?>

    <h1>My Tasks</h1>
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

<?php

    require_once('assets/footer.php');

?>