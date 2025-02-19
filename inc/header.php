    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container">
        <a class="navbar-brand" href="index.php"><img src="asset/Airbnb_Logo_Bélo.svg.png" width="150px" alt="" srcset=""></a>
        <form action="search.php" class="searchform">
            <span class="titre">Rechercher</span>
            <input type="text" name="search" id="search">
            <input type="submit" value="Rechercher" id="destroy">
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <?php if(!isset($_SESSION["client"])){ ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php?page=<?php echo("connexion");?>">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?page=<?php echo("incription");?>">Inscription</a>
                    </li>
                <?php } 
                else { ?>
                    <li class="nav-item active">
                        <p><?php echo $_SESSION["name"]; ?></p>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="inc/Deconnexion.php">Deconnexion</a>
                    </li>
                <?php 
                    if(isset($_SESSION["admin"])==1){ ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Modifier Liste</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Graph</a>
                        </li>
                <?php }
                } ?>
            </ul>
        </div>
        </div>
    </nav>