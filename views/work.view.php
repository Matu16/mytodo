<?php require_once('partials/head.php'); ?>

    <h1>Come to work with us</h1>

    <ul>
        <?php foreach ( $works as $work ): ?>
            <li>
                
                <?= $work->title . ' | ' . $work->description . ' | ' . $work->status; ?>

            </li>
        <?php endforeach;  ?>
    </ul>

<?php require_once('partials/head.php'); ?>