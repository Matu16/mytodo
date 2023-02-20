<?php require_once('partials/head.php'); ?>

    <form action="/news/delete" method="post">
        <input type="hidden" value="<?= $id ?>" name="id">
        <input type="submit" value="Yes" name="submit">
        <a href="/">No</a>
    </form>
<?php require_once('partials/head.php'); ?>

