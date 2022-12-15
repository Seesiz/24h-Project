<div class="list">
    <?php 
        include("inc/function.php");
        require 'inc/PDOPost.php';
        $connection = PDOpostGres();
        $allHabitat = getAllHabitat($connection);
        for ($i = 0; $i < count($allHabitat); $i++) { ?>
        <div class="habitat">
            <img src="<?php echo $allHabitat[$i]["photo"]; ?>" alt="" srcset="">
        </div>
    <?php } ?>
</div>