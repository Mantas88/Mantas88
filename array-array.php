<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style>
		table {border-collapse: collapse;}
		td, th {
			border: 1px #ccc solid;
			padding: 5px 10px;
		}
		td:first-child, td:last-child {
			texh align: center;
		}	
	</style>
</head>
<body>
<?php 

$m = [
[
	'vardas'=> 'Jonas',
	'pareigos' => 'Direktorius',
	'atlyginimas' => 5000
],
[
	'vardas' => 'Petras',
	'pareigos' => 'Pavaduotojas',
	'atlyginimas' => 3000
],
[
	'vardas' => 'Juozas',
	'pareigos' => 'Valytojas',
	'atlyginimas' => 5000
]
];
?>
<table>
	<tr>
		<th>Nr</th>
		<th>Vardas</th>
		<th>Pareigos</th>
		<th>Atlyginimas</th>
	</tr>

	<?php
	$n = 0;
		foreach ($m as $darb){
	?>	
	<tr>
		<td><?php echo ++$n . '.'?></td>
		<td><?php echo $darb['vardas'];?></td>
		<td><?php echo $darb['pareigos']; ?></td>
		<td><?php echo $darb['atlyginimas']; ?></td>

	</tr>
</tr>
<?php
}
?>

</table>

</body>
</html>