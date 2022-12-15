<div class="list">
    <?php 
        include("inc/function.php");
        require 'inc/PDOPost.php';
        $connection = PDOpostGres();
        $allHabitat = getAllHabitat($connection);
        for ($i = 0; $i < count($allHabitat); $i++) { ?>
        <a href="inc/Detail.php?idHabitat=<?php echo $allHabitat[$i]["id"]; ?>">
            <div class="habitat">
                <img src="<?php echo $allHabitat[$i]["photo"]; ?>" width="100%" alt="" srcset="">
                <h5><?php echo $allHabitat[$i]["quartier"];?></h5>
                <p><?php echo $allHabitat[$i]["description"];?></p>
            </div>
        </a>
    <?php } ?>
</div>