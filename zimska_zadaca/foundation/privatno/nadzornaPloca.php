<?php include_once "../konfiguracija.php";
if (!isset($_SESSION["autoriziran"])) {
    header("location: " . $putanjaAPP);
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>

    <?php include_once '../include/head.php'; ?>

</head>

<body>

<!-- izbornik -->

<?php include_once "../include/izbornik.php" ?>


<section id="about">
    <div class="row">
        <div class="small-12 large-12 columns">
            <div class="text-center">
                <h2>Ovo je nadzorna ploča!</h2>

                <?php

                print_r($_SESSION);
                ?>

            </div>

        </div>

</section>


<!-- footer -->
<?php include_once "../include/podnozje.php"; ?>

<!-- skripte -->
<?php include_once "../include/skripte.php" ?>

</body>

</html>
