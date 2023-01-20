<?php

    require_once('assets/header.php');
    
?>

    <h1>My Tasks</h1>
    <ul>
        <?php foreach ( $work as $work ): ?>
            <li>

                <?= $work->title . ' | ' . $work->description . ' | ' . $work->status; ?>

            </li>
        <?php endforeach;  ?>
    </ul>

<?php

    require_once('assets/footer.php');
    
?>

