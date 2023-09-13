<?php
//assignment menggunakan fungsi array
$bulan = array ('Jan' => 'Januari',
                'Feb' => 'Februari',
                'Mar' => 'Maret',
                'Apr' => 'April',
                'Mei' => 'Mei',
                'Jun' => 'Juni',
                'Jul' => 'Juli',
                'Agu' => 'Agustus',
                'Sep' => 'September',
                'Okt' => 'Oktober',
                'Nov' => 'November',
                'Des' => 'Desember');

foreach($bulan as $kode_bulan => $nama_bulan){
    echo 'Kode Bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br/>';
}
?>