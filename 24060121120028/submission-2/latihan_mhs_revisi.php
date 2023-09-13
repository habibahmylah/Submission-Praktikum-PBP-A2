<?php
// Fungsi untuk menghitung nilai rata-rata
function hitung_rata($array) {
    $total = array_sum($array);
    $count = count($array);

    if ($count > 0) {
        return $total / $count;
    } else {
        return 0;
    }
}

// Fungsi untuk menampilkan data mahasiswa dalam tabel
function print_mhs($array_mhs) {
    // Cek apakah array mahasiswa kosong
    if (empty($array_mhs)) {
        echo "Array mahasiswa kosong.";
        return;
    }

    echo '<table border="1">';
    echo '<tr>
            <td>Nama</td>
            <td>Nilai 1</td>
            <td>Nilai 2</td>
            <td>Nilai 3</td>
            <td>Rata2</td>
        </tr>';

    foreach ($array_mhs as $nama => $nilai) {
        echo '<tr>';
        echo '<td>' . $nama . '</td>';
        echo "<td>{$nilai[0]}</td>";
        echo "<td>{$nilai[1]}</td>";
        echo "<td>{$nilai[2]}</td>";

        $rata2 = hitung_rata($nilai);
        echo '<td>' . $rata2 . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

// Array data dan nilai mahasiswa
$array_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi' => array(98, 65, 74),
    'Nina' => array(67, 56, 84)
);

// Panggil fungsi print_mhs
print_mhs($array_mhs);
?>
