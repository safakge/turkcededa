turkcededa
==========

PHP icin Turkce de da baglac secicisi.

Kullanım:
----
Kod:

    <?php
    include('SGdeda.php');
    $word = "Osman";
    echo $word." ".da_or_de($word)." iyidir.\n";
    $word = "Ali";
    echo $word." ".da_or_de($word)." iyidir.";
    ?>

Çıktı:

    Osman da iyidir.
    Ali de iyidir.
  
Bu kadar. All rights hayırını görün.
