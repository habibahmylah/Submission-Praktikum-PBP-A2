<?php
//tabel
function print_mhs($array_mhs){
echo '<table border="1">';
echo '<tr>
        <td>Nama</td>
        <td>Nilai 1</td>
        <td>Nilai 2</td>
        <td>Nilai 3</td>
        <td>Rata2</td>
    </tr>';

//hitung nilai rata2 mahasiswa
function hitung_rata($array){
    $total = array_sum($array);
    $count = count($array);

    if ($count > 0){
        return $total / $count;
    } else {
        return 0;
    }
}
//array data dan nilai mahasiswa
$array_mhs = array ('Abdul' => array (89, 90, 54),
                    'Budi' => array (98, 65, 74),
                    'Nina' => array (67, 56, 84));

//menampilkan data dan nilai mahasiswa pada tabel
foreach ($array_mhs as $nama => $nilai){
    echo '<tr>';
    echo '<td>'.$nama.'</td>';
    echo "<td>{$nilai[0]}</td>";
    echo "<td>{$nilai[1]}</td>";
    echo "<td>{$nilai[2]}</td>";

    $rata2 = hitung_rata($nilai);
    echo '<td>'.$rata2.'</td>';
    echo '</tr>';
}
echo '</table>';
}

//panggil fungsi print
print_mhs($array_mhs);
?>