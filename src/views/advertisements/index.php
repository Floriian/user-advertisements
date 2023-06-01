<?php
require_once("src/views/header.php");

?>
<h1 class="title">Advertisements List</h1>
<div class="dataContainer">
    <div class="box">
        <?php foreach($advertisements as $advertisement): ?>
            <p>
                <?php echo $advertisement['title'] ?>
                <span>(
                    <?php echo $advertisement['name'] ?>
                )
                </span>
            </p>
        <?php endforeach; ?>
    </div>
</div>

<?php
require_once("src/views/footer.php");
?>