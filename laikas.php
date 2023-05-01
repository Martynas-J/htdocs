<!DOCTYPE html>
<html>
<body>
	<div id="laikas">
<td><?php  echo $current_time = date('Y-m-d H:i:s');?></td></div>
	<script>
		// Nustatome funkciją, kuri bus iškviesta kas sekundę
		function atnaujintiLaika() {
			// Sukuriame naują Datetime objektą
			var dabartineData = new Date();

			// Konvertuojame Datetime objektą į tekstinę eilutę
			var laikoEilute = dabartineData.toLocaleString('lt-LT', {year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit'});

			// Pakeičiame HTML elemento turinį su nauja teksto eilute
			document.getElementById("laikas").innerHTML = laikoEilute;
		}

		// Nustatome setInterval() metodą, kad funkcija atnaujintiLaika() būtų iškviesta kas sekundę
		setInterval(atnaujintiLaika, 1000);
	</script>
</body>
</html>