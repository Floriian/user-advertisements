<?php
require_once("src/views/header.php");
?>

<div class="box">
    <?php foreach($advertisements as $advertisement): ?>
        <p class="text">
            <?php echo $advertisement['title'] ?>
            <span>(<?php echo $advertisement['name'] ?>)</span>
        </p>
    <?php endforeach; ?>
</div>

<?php
require_once("src/views/footer.php");
?>