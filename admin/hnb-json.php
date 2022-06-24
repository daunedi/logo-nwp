<?php 
$json = file_get_contents('http://api.hnb.hr/tecajn/v1');

//Decode JSON
$json_data = json_decode($json,true);
		
print '
<!DOCTYPE html>
<html lang="en">
<head></head>
	<body>
		
			<table class="table">
				<thead>
					<tr>
						<th width="16">Broj</th>
						<th width="42">Datum</th>
						<th width="16">Zemlja</th>
						<th width="16">Kod</th>
						<th width="16">Valuta</th>
						<th width="32">Količna</th>
						<th width="100">Kupovni</th>
						<th width="100">Srednji</th>
						<th width="100">Prodajni</th>
					</tr>
				</thead>
				<tbody>';
				foreach($json_data as $key => $value) { 
						
				print '
				<tr>
					<td>' . $json_data[$key]["Broj tečajnice"] . '</td>
					<td>' . $json_data[$key]["Datum primjene"] . '</td>
					<td>' . $json_data[$key]["Država"] . '</td>
					<td>' . $json_data[$key]["Šifra valute"] . '</td>
					<td>' . $json_data[$key]["Valuta"] . '</td>
					<td>' . $json_data[$key]["Jedinica"] . '</td>
					<td>' . $json_data[$key]["Kupovni za devize"] . '</td>
					<td>' . $json_data[$key]["Srednji za devize"] . '</td>
					<td>' . $json_data[$key]["Prodajni za devize"] . '</td>
				</tr>';
			}
			print '
			</tbody>
		</table>
	</body>
</html>';
	
?>
