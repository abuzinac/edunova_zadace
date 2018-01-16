<?php include_once "konfiguracija.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>

    <?php include_once 'include/head.php'; ?>

</head>

<body>

<!-- izbornik -->

<?php include_once "include/izbornik.php" ?>


<section id="about">
    <div class="row">
        <div class="small-12 large-12 columns">
            <div class="text-center">
                <h2>Unesite vaše podatke!</h2>
                <p>Morbi auctor lacinia mi nec suscipit. Vivamus eget dui dignissim, fermentum leo nec, suscipit nunc.
                    Etiam feugiat lacinia sapien, lacinia hendrerit orci fermentum vitae. Quisque posuere vitae elit
                    vitae ornare. Praesent ornare quam id. Morbi auctor lacinia mi nec suscipit. Vivamus eget dui
                    dignissim, fermentum leo nec, suscipit nunc. Etiam feugiat lacinia sapien, lacinia hendrerit orci
                    fermentum vitae. Quisque posuere vitae elit vitae ornare. Praesent ornare quam id.</p>
            </div>

    </div>
        <div class="grid-x grid-padding-x">
            <div class="large-4 large-offset-4 cell centered">
                <form class="log-in-form" action="autoriziraj.php" method="post">
                    <h4 class="text-center">Unesite Vaše podatke</h4>
                    <label>Email
                        <input type="email" name="email" placeholder="andrija@buzinac.hr"
                               value="<?php if(isset($_GET["email"])){
                                   echo $_GET["email"];
                               } ?>">
                    </label>
                    <label>Lozinka
                        <input type="password" name="lozinka" placeholder="Lozinka je ab">
                    </label>
                    <p><input type="submit" class="button expanded" value="Prijava"></input></p>
                    <?php if(isset($_GET["neuspjelo"])){
                        echo "Neispravna kombinacija email/lozinka";
                    } ?>
                </form>

            </div>
</section>


<!-- footer -->
<?php include_once "include/podnozje.php"; ?>

<!-- skripte -->
<?php include_once "include/skripte.php"?>

</body>

</html>
