<?php
// Array awal dengan 6 elemen string (nama perangkat keras komputer)
$hardware = ["Processor", "RAM", "Hard Disk", "Motherboard", "Power Supply", "VGA Card"];

// Menampilkan array dalam bentuk list HTML
echo "<h3>Daftar Perangkat Keras Komputer:</h3>";
echo "<ul>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

// Menambahkan 2 elemen baru ke dalam array
array_push($hardware, "SSD", "Cooling Fan");

// Menampilkan array setelah penambahan elemen baru
echo "<h3>Setelah Penambahan:</h3>";
echo "<ul>";
foreach ($hardware as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";
