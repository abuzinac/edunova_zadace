<?php include_once "konfiguracija.php"; ?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>

    <!-- head -->
	<?php include_once "include/head.php"; ?>

</head>

<body>
<!-- Izbornik -->
<?php include_once "include/izbornik.php"; ?>

<div id="loginpage">

    <!-- Page Content -->

    <div class="container">


                <div class="opis">
                    <h2>Prijavite se na stranicu...</h2>
                </div>


                <form class="login_forma" action="autoriziraj.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="login_text">Unesite vaš email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                               placeholder="andrija@oaza.hr"

                               value="<?php if (isset($_GET["email"])) {
							       echo $_GET["email"];
						       } else {
							       if ($dev) {
								       echo "andrija@oaza.hr";
							       }
						       }
						       ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="login_text">Unesite vašu lozinku</label>
                        <input type="password" name="lozinka" class="form-control" id="exampleInputPassword1"
                               placeholder="oaza"

                               value="<?php echo $dev ? "oaza" : ""; ?>">

                    </div>
                    <button type="submit" class="btn btn-primary login_submit">Prijava</button>

					<?php if (isset($_GET["neuspjelo"])) {
						echo "Neispravna kombinacija email/lozinka";
					}

					?>
                </form>


        <!-- /.container -->
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark" id="podnozje">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Andrija Buzinac <?php echo date("Y"); ?></p>
        </div>
        <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
	<?php include_once "include/skripte.php"; ?>


</body>

</html>