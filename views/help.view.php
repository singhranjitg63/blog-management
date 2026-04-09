<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/banner.php"); ?>
<main>
    <?php foreach($note as $post):?>
    <li><?= $post['name']?></li>
    <?php endforeach ;?>

</main>

<?php require("partials/footer.php"); ?>