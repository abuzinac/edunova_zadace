<div id="top"></div>
<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1>
                    <a href="<?php echo $putanjaAPP; ?>index.php"><?php echo $naslovAPP; ?></a>
                </h1>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#">
                    <span>Menu</span>
                </a>
            </li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul id="nav" class="right">
                <li<?php
                if ($_SERVER ["PHP_SELF"] === $putanjaAPP . "index.php") {
                    echo " class=\"active\"";
                }

                ?>>
                    <a href="<?php echo $putanjaAPP; ?>index.php">POČETNA</a>
                </li>

                <li<?php
                if ($_SERVER ["PHP_SELF"] === $putanjaAPP . "onama.php") {
                    echo " class=\"active\"";
                }

                ?>>
                    <a href="<?php echo $putanjaAPP; ?>onama.php">O NAMA</a>
                </li>
                <li <?php
                if ($_SERVER ["PHP_SELF"] === $putanjaAPP . "login.php") {
                    echo " class=\"active\"";
                }
                ?>>

                    <?php if (!isset($_SESSION["autoriziran"])): ?>
                    <a href="<?php echo $putanjaAPP; ?>login.php">PRIJAVA</a>
                    <?php else: ?>
                    <a href="<?php echo $putanjaAPP; ?>logout.php">ODJAVA</a>
                    <?php endif; ?>
                </li>

            </ul>

        </section>
    </nav>
</div>