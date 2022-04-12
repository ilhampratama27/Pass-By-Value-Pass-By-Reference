<?php
 //pass by value
 function tambah1(&$num) {
 $num += 3;
 }
 
 //pass by reference
 function tambah2(&$num) {
 $num += 3;
 }
 

 $nilai_asli = 7;
 tambah1($nilai_asli);
  /*disini variabel pada nilai asli akan dimasukkan ke dalam
   parameter tersebut, sehingga hanya menghasilkan nilai yang asli*/
 echo "Nilai pass by value adalah <b> $nilai_asli</b><br />";
 
 /*setelah itu nilai awal akan dimanupulasi sesuai  yang  akan
  ditambah 3 itu akan dijumlahkan */
 tambah2( $nilai_asli );
 echo "Nilai pass by reference adalah <b> $nilai_asli</b><br />";
?>