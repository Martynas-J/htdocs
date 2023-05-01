<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
</head>
<body>
	<table id="sarasas">
	<tr>
		<td><?php  session_write_close(); include_once("get_sarasas.php");?></td>
	</tr>
	</table>

	<script>
	$(document).ready(function() {
			// Nustatome setInterval() metodą, kad funkcija atnaujintiDuomenis() būtų iškviesta kas sekundę
			setInterval(atnaujintiDuomenis, 1000);
		});
		function atnaujintiDuomenis() {
			// Siunčiame AJAX užklausą į serverį
			$.ajax({
				url: 'get_sarasas.php', // failo kelias, kuriame yra PHP kodas, skirtas gauti sąrašą iš duomenų bazės
				method: 'GET',
				dataType: 'html',
				success: function(data) {
					// Atnaujiname sąrašo turinį su naujais duomenimis
					$('#sarasas').html(data);
				}
			});
		}
		
	</script>

</body>
</html>
