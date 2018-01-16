<?php include_once "konfiguracija.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>

    <?php include_once 'include/head.php'; ?>

</head>

<body>

<!-- izbornik -->

<?php include_once "include/izbornik.php" ?>

<!-- naslovna slika -->
<section class="jumbo">
    <div class="row">
        <div class="large-12 columns">
            <h1>Feel the diference</h1>
            <p class="text-center">
                <a href="#about" class="medium button">Welcome</a>
            </p>

        </div>
    </div>
</section>

<!-- sadrzaj pocetne stranice -->
<section id="about">
    <div class="row">
        <div class="small-12 large-12 columns">
            <div class="text-center">
                <h2>Welcome to our site!</h2>
                <p>Morbi auctor lacinia mi nec suscipit. Vivamus eget dui dignissim, fermentum leo nec, suscipit nunc.
                    Etiam feugiat lacinia sapien, lacinia hendrerit orci fermentum vitae. Quisque posuere vitae elit
                    vitae ornare. Praesent ornare quam id. Morbi auctor lacinia mi nec suscipit. Vivamus eget dui
                    dignissim, fermentum leo nec, suscipit nunc. Etiam feugiat lacinia sapien, lacinia hendrerit orci
                    fermentum vitae. Quisque posuere vitae elit vitae ornare. Praesent ornare quam id.</p>
            </div>
            <div>
                <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                    <li>
                        <img src="img/oaza_slide02.jpg" alt="image1"/>
                        <h3 class="text-center">Heading 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid debitis delectus dicta ea
                            enim eum exercitationem fugiat iusto porro praesentium! Debitis dolores, eligendi harum
                            pariatur possimus praesentium quidem similique tenetur!</p>

                    </li>
                    <li>
                        <img src="img/oaza_slide03.jpg" alt="image2"/>
                        <h3 class="text-center">Heading 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda beatae delectus, facere
                            harum illum laudantium nam obcaecati quas qui voluptatibus. Amet culpa ea eligendi harum
                            omnis sapiente sint velit voluptatem.</p>

                    </li>
                    <li>
                        <img src="img/oaza_slide04.jpg" alt="image3"/>
                        <h3 class="text-center">Heading 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque dicta eos
                            exercitationem laboriosam magni maxime, minus nobis nostrum quaerat quidem, quisquam
                            recusandae rerum similique soluta ullam ut vitae voluptates!</p>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php include_once "include/podnozje.php"; ?>

<!-- skripte -->
<?php include_once "include/skripte.php"; ?>

</body>

</html>
