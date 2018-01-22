<?php include_once "konfiguracija.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>

	<?php include_once "include/head.php"; ?>

</
head>

<body>

<!-- Izbornik -->
<?php include_once "include/izbornik.php"; ?>


<!-- Header with Background Image -->
<header class="business-header">

    <div class="container">

    </div>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-sm-8">
            <h2 class="mt-4">Doborodošli na našu stranicu...</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi
                soluta quasi?
                Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo,
                maiores!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni
                in nisi,
                natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate.
                Voluptatum.</p>
            <p>
                <a class="btn btn-primary btn-lg" href="<?php echo "$putanjaAPP"; ?>login.php">Registracija &raquo;</a>
            </p>
        </div>
        <div class="col-sm-4">
            <h2 class="mt-4">Kontaktirajte nas</h2>
            <address>
                <strong><?php echo "$naslovAPP"; ?></strong>
                <br>3481 Melrose Place
                <br>Beverly Hills, CA 90210
                <br>
            </address>
            <address>
                <abbr title="Phone">P:</abbr>
                (123) 456-7890
                <br>
                <abbr title="Email">E:</abbr>
                <a class="email_c" href="mailto:#">name@example.com</a>
            </address>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="img/oaza_slide01.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque sequi doloribus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="img/oaza_slide02.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque sequi doloribus
                        totam ut praesentium aut.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="img/oaza_slide04.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                        necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php include_once "include/podnozje.php" ?>

<!-- Bootstrap core JavaScript -->
<?php include_once "include/skripte.php"; ?>

</body>

</html>