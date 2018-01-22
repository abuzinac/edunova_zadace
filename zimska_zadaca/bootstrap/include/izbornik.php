<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <a class="navbar-brand" href="<?php echo $putanjaAPP; ?>index.php"><?php echo $naslovAPP; ?></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

				<?php stavkaIzbornika($putanjaAPP . "index.php", "Početna"); ?>

				<?php if (isset($_SESSION[$appID . "autoriziran"])): ?>
					<?php stavkaIzbornika($putanjaAPP . "privatno/nadzornaPloca.php", "Nadzorna ploča"); ?>
				<?php endif; ?>

				<?php stavkaIzbornika($putanjaAPP . "onama.php", "O nama"); ?>
				<?php stavkaIzbornika($putanjaAPP . "kontakt.php", "Kontakt"); ?>


                <!--prijava/odjava-->
                <li id="loginout" <?php
					if ($_SERVER["PHP_SELF"] === $putanjaAPP . "login.php") {
						echo " class=\"active\"";
					}

				?>>
					<?php if (!isset($_SESSION[$appID . "autoriziran"])): ?>
                        <a class="a_izbornik" href="<?php echo $putanjaAPP; ?>login.php">Prijava</a>
					<?php else: ?>
                        <a class="a_izbornik" href="<?php echo $putanjaAPP; ?>logout.php">Odjava</a>
					<?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>