<?php require_once('partials/head.php'); ?>

<h1>UUDISED</h1>

<h2>Loo uus:</h2>
<form action="news/post" method="post">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="content" placeholder="content">
    <input type="submit" value="send">
</form>


<div class="news_base">

    <?php foreach( $uudised as $uudis): ?>

        <div class="news_card">

            <div class="news_title">
                <h1><?php echo $uudis->title ?></h1>
            </div>

            <div class="news_content">
                <h2><?php echo $uudis->content ?></h2>
            </div>

            <div class="news_edit">
                <div class="edit_btn">
                    <a href="news/edit?id=<?= $uudis->id ?>"><span class="material-symbols-outlined">edit</span></a>
                </div>

                <div class="del_btn">
                    <a href="news/delete/confirm?id=<?= $uudis->id ?>"><span class="material-symbols-outlined">delete</span></a>
                </div>
            </div>

        </div>

    <?php endforeach; ?>

</div>


<?php require_once('partials/head.php'); ?>

