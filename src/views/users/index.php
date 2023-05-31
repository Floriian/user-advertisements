<?php
require_once("src/views/header.php");
?>

<div class="box">
    <?php foreach($users as $user): ?>
        <p class="text"><?php echo $user['name'] ?></p>
    <?php endforeach; ?>
</div>

<?php
require_once("src/views/footer.php");
?>