<?php
$bulan = array (1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

$opsi_bulan = '<select name="bulan">';
foreach ($bulan as $key => $value) {
	$opsi_bulan .= '<option value="' . $key . '">' . $value . '</option>' . "\r\n";
}
$opsi_bulan .= '</select>';

echo $opsi_bulan;

echo "<p><strong><i>By :Ahmad arjun trisula</strong><hr>";
$no = 1;
$tabel = '
<table>
	<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Penjualan</th>
	</tr>';
{
	$tabel .= '
	<tr>
	</tr>';
	$no++;
}
$tabel .= '</table>';
echo $tabel;

?>

<table>
	
	<tr>
		<td>1</td>
		<td>Januari</td>
		<td>5.500</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Februari</td>
		<td>7.500</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Maret</td>
		<td>11.500</td>
	</tr>
	<tr>
		<td>4</td>
		<td>April</td>
		<td>8.800</td>
	</tr>
	<tr>
		<td>5</td>
		<td>Mei</td>
		<td>7.500</td>
	</tr>
</table>

<p><strong><i>By :Ahmad arjun trisula</strong>
?>