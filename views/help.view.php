<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>
<main>
    <?php foreach($note as $post):?>
    <li> 
        <a href="note?id=<?= $post['id'] ?>" class="text-blue">
            <?= $post['name']?>
        </a>
    </li>
    <?php endforeach ;?>

</main>

<?php require("partials/footer.php"); ?>