<?php require_once('partials/head.php'); ?>

    <form action="/news/edit/post" method="post">
        <label for="title">
            <input type="text" name="title" value="<?= $post['title'] ?>">
        </label>
        <label for="content">
            <textarea name="content" id="content" cols="30" rows="10"><?= $post['content'] ?></textarea>
        </label>
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <label for="submit">
            <input type="submit" name="submit">
        </label>
    </form>
    
<?php require_once('partials/head.php'); ?>