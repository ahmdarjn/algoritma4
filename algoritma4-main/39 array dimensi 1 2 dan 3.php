<?php
$test=array("Index pertama","Index Kedua","Index ketiga");
echo "Hasil array : 0." . $test[0] . ", 1." . $test[1] . " dan 2." . $test[2] . ".<hr>";

$nilai=array(
    array(90,65,83),
    array(90,78,97),
    array(78,90,78)
  );
echo"output array <br>";
echo $nilai[0] [0]." ".$nilai[0] [1]." ".$nilai[0] [2]."<br>";
echo $nilai[1] [0]." ".$nilai[1] [1]." ".$nilai[1] [2]."<br>";
echo $nilai[2] [0]." ".$nilai[2] [1]." ".$nilai[2] [2]."<br><hr>";

$nilai=array(
    array(
      array(90,65,83),
      array(90,78,97),
      array(78,90,78)
    ), 
    array(array(90,65,83),
      array(90,78,97),
      array(78,90,78)
    )
  );
echo"output array <br>";
echo $nilai[0] [0] [0]." ".$nilai[0] [0] [1]." ".$nilai[0] [0] [2]."<br>";
echo $nilai[0] [1] [0]." ".$nilai[0] [1] [1]." ".$nilai[0] [1] [2]."<br>";
echo $nilai[0] [2] [0]." ".$nilai[0] [2] [1]." ".$nilai[0] [2] [2]."<br>";
echo "<p><strong><i>By :Ahmad arjun trisula</strong>";
?>
