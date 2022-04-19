<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
  $paragraph = "Fai bene a dedicare tutta la tua vita e la tua passione alla tua opera, però la ceramica è bella e fragile, proprio come la vita. La ceramica e la vita possono rompersi in mille pezzi, ma non per questo dobbiamo smettere di vivere intensamente, di lavorare con impegno o di riporre nella nostra esistenza le nostre speranze.";
	$badWord = $_GET["badword"];
?>

<p>
	<?php
		echo str_replace($badWord, "***", $paragraph);
	?>
	<pre>
		<?php
			echo " => la lunghezza del paragrafo è di " . strlen($paragraph) . " caratteri";
		?>
	</pre>
</p>
