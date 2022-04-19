<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
  $paragraph = "Fai bene a dedicare tutta la tua vita e la tua passione alla tua opera, però la ceramica è bella e fragile, proprio come la vita. La ceramica e la vita possono rompersi in mille pezzi, ma non per questo dobbiamo smettere di vivere intensamente, di lavorare con impegno o di riporre nella nostra esistenza le nostre speranze.";
	$badWord = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>Php Badwords</title>
</head>
<body>
	<main>
		<section>
			<q>
				<?php
					echo str_ireplace($badWord, "***", $paragraph);
				?>
			</q>
			<span id="p-lenght">
				<?php
					echo "La lunghezza del paragrafo è di " . strlen($paragraph) . " caratteri.";
				?>
			</span>
			<span>
				Le parole censurate verranno visualizzate con tre asterischi (inserire una parola da censurare tramite parametro get : ?badword=x ).
			</span>
		</section>
	</main>
</body>
</html>
