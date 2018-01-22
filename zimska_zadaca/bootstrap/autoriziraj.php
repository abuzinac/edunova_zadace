<?php

	if (!isset($_POST["email"]) || !isset($_POST["lozinka"])) {
		exit;
	}

	//ovdje će doći spajanje na bazu
	if ($_POST["email"] === "andrija@oaza.hr" && $_POST["lozinka"] === "oaza") {
		include_once "konfiguracija.php";
		$_SESSION[$appID . "autoriziran"] = "Oaza Zaposlenik";
		header("location: privatno/nadzornaPloca.php");
	}


	//autorizacija korisnika ????
	/*/*elseif ($_POST["email"] === "korisnik@gmail.com" && $_POST["lozinka"] === "lozinka") {
		include_once "konfiguracija.php";
		$_SESSION[$appID . "autoriziran_korisnik"] = "Oaza Korisnik";
		header("location : privatno/nadzornaPloca_korisnik.php");
	}*/ else {
		header("location: login.php?neuspjelo&email=" . $_POST["email"]);
	}

