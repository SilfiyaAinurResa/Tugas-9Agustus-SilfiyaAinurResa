<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Demo</title>
</head>
<body>
          <p>Latihan & Soal Jadi Satu Yaa :)</p>
<p>_______________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>
          <p>LATIHAN</p>
<p>_______________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>

          
          <p>~~~~~~~~~~~~~~Program PHP~~~~~~~~~~~~~~</p>
          <?php
          echo 'Kode PHP di sini';
          // ...
          ?>

          <p> Dokumen HTML </p>

          <?php
          echo 'Kode PHP di sini';
          // ...
          ?>

<p>~~~~~~~~~~~~~~Variabel~~~~~~~~~~~~~~</p>
<p>
          <?php

          // Deklarasi dan inisialisasi
          $bil = 3;

          echo $bil;

          ?>
</p>

<p>~~~~~~~~~~~~~~Isset~~~~~~~~~~~~~~</p>
<p>
          <?php

          $bil = 3;
          var_dump ($bil) ;
          // Output: int (3)

          $var = "";
          var_dump ($var) ;
          // Output: string (0) ""

          $var = null;
          var_dump ($var) ;
          // Output: NULL

          ?>
</p>

<p>~~~~~~~~~~~~~~if~~~~~~~~~~~~~~</p>
<p>
          <?php
          $a = 10;
          $b = 5;

          if ($a > $b) {
          echo 'a lebih besar dari b';
}

?>

</p>

<p>~~~~~~~~~~~~~~if-else~~~~~~~~~~~~~~</p>
<p>
          <?php
          $a = 5;
          $b = 10;

          if ($a > $b) {
          echo 'a lebih besar dari b';
} else {
          echo 'a Tidak lebih besar dari b';
}

?>

</p>

<p>~~~~~~~~~~~~~~if-elseif~~~~~~~~~~~~~~</p>

<p>
          <?php
          $a = 5;
          $b = 5;

          if ($a > $b) {
          echo 'a lebih besar dari b';
} elseif ($a == $b) {
          echo 'a sama dengan b';
} else {
          echo 'a Tidak lebih besar dari b';
}

?>

</p>


<p>~~~~~~~~~~~~~~while~~~~~~~~~~~~~~</p>
<p>
          <?php
          $i = 0;

          while ($i < 10) {
                    echo $i;
                    echo "<br />";

                    // Inkremen counter
                    $i++;
          }
          ?>
</p>


<p>~~~~~~~~~~~~~~do-while~~~~~~~~~~~~~~</p>
<p>
          <?php

          $i = 0;

          do {
                    echo $i;
                    echo "<br />";

                    // Inkremen counter
                    $i++;
          } while ($i < 10);
          ?>
</p>


<p>~~~~~~~~~~~~~~for~~~~~~~~~~~~~~</p>
<p>
          <?php
          for ($i = 0; $i < 10; $i++) {
                    echo $i;
                    echo "<br />";
                    
          }
          ?>
</p>

<p>_______________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>
<p>TUGAS</p>
<p>_______________________________________________________________________________________________________________________________________________________________________________________________________________________________</p>
<P>1. Tampilkan perulangan bilangan genap dari 100 -> 0</P>
<p>JAWABAN: </p>

<p>
<?php
$i = 100;
while($i >= 0)
{
          echo "$i";
          echo "<br />";
          $i-=2;
}
?>
</p>


<P>2. Tampilkan bilangan yang mempunyai angka 8, bilangan maksimal 100! Contoh = 8, 18, 28, dll.
</P>
<p>JAWABAN: </p>

<p>
<?php
for ($i= 8; $i <= 100; $i=$i+10)
{
          echo $i;
          echo "<br />";
}
?>
</p>

</body>
</html>