<?php

    //funkcija naziva stavka izbornika
	function stavkaIzbornika($putanja, $opis)
	{
		?>
        <li<?php echo $_SERVER["PHP_SELF"] === $putanja ? " class=\"active\"" : ""; ?>>
            <a class="a_izbornik" href="<?php echo $putanja; ?>"><?php echo $opis;
				?></a>

        </li>

		<?php

	}

//funkcija provjeraOvlasti (ne prima naredbe)
	function provjeraOvlasti()
	{
		if (!isset($_SESSION[$GLOBALS["appID"] . "autoriziran"])) {
			header("location: " . $GLOBALS["putanjaAPP"]);
		}
	}
