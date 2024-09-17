<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "Ahmad arjun trisula"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "Ahmad arjun trisula"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "Ahmad arjun trisula"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
}

echo "<p><strong><i>By :Ahmad arjun trisula</strong>";