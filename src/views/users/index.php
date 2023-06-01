<?php
require_once("src/views/header.php");
?>
<h1 class="title">Users List</h1>
<div class="dataContainer">
    <div class="box">
        <?php foreach($users as $user): ?>
            <p class="text"><?php echo $user['name'] ?></p>
        <?php endforeach; ?>
    </div>
</div>

<?php
require_once("src/views/footer.php");
?>