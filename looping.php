<?php
// perulangan for
for($i = 0; $i <10; ){
    echo "<h2> ini perulangan ke-$i</<h2>";
}

//perulangan while
$ulangi=0;

while ($ulangi <10){
    echo"<p> ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

//perulangan do/while
$loop =10;

do{
    echo"<p> looping $ulangi </p>";
    $loop--;
}while ($loop > 0 );

//perulangan foreeach
$books=[
    "panduan belajar php untuk pemula",
    "membangun aplikasi web dengan php",
    "tutorial php dan mysql",
    "memmbuat chat bot dengan php"
];

echo "<h5> judul buku php:</h5>";
echo "<ul>";

foreach($books as$buku){
    echo "<li> $buku</li>";
}
echo "</ul>";
?> 