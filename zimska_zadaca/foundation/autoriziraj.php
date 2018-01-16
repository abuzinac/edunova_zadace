<?php

if (!isset($_POST["email"]) || !isset($_POST["lozinka"])) {
    exit;
}

if ($_POST["email"] === "andrija@buzinac.hr" && $_POST["lozinka"] === "ab") {
    session_start();
    $_SESSION["autoriziran"] = "Oaza Zaposlenik";
    header("location: privatno/nadzornaPloca.php");
} else {
    header("location: login.php?neuspjelo&email=" . $_POST["email"]);
}