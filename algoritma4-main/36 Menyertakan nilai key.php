<?php
$bulan = array ('Januari', 'Februari', 'Maret');
foreach ($bulan as $index => $nama_bulan) {
	echo ($index + 1) . '. ' . $nama_bulan . '<br/>';
}

echo "<p><strong><i>By : Ahmad arjun trisula</strong><hr>";
$kendaraan = array('jenis' => 'Mobil', 'merk' => 'Toyota', 'tipe' => 'Vios');
foreach ($kendaraan as $key => $val) {
	echo ucfirst($key) . ': ' . $val . '<br/>';
}
