<!DOCTYPE html>
<html>
<head>
	<title>
		Tes 2 Array
	</title>
</head>
<body>
	<p>
		No 1.
		<!-- PHP UNTUK MENGISI WARNA PADA KALIMAT --> 
		<?php 
			$color1 = array('white','green','red','blue','black');

			echo "The memory of that scene for me is like a frame of film forever frozen at that <br> moment: the $color1[3] carpet, the $color1[2] lawn, the $color1[1] house, the leaden sky. The new <br> president and his first lady. - Richard M. Nixon";
		?>
	</p>
	<p>
		No 2.
		<!-- PHP UNTUK MENAMPILKAN LIST WARNA -->
		<?php
			$color2 = array('white','green','red');

			foreach ($color2 as $row){
				echo "$row, ";
			}
			echo "<br>";
			echo "<ul>";
			foreach ($color2 as $row){
				echo "<li>$row</li>";
			}
			echo "</ul>"
		?>
	</p>
	<p>
		No 3.
		<!-- PHP UNTUK MENAMPILKAN NEGARA DAN IBUKOTANYA -->
		<?php
			$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
			asort($ceu);
			foreach ($ceu as $negara => $ibukota) {
				echo "The capital of $negara is $ibukota.<br>";
			}
		?>
	</p>
	<p>
		No 5.
		<!-- PHP UNTUK MENGAMBIL ARRAY PERTAMA -->
		<?php
			$color3 = array(4 => 'white', 6 => 'green', 11=> 'red');
			$output = array_shift($color3);
			
			echo $output;
		?>
	</p>
	<p>
		No 7.
		<!-- PHP UNTUK MENAMBAHKAN DATA ARRAY -->
		<?php
			$array_awal = array(1,2,3,4,5);
			$array_tambah = $array_awal;
			array_splice($array_tambah, 3, 0, array("$"));

			echo "Original array :";
			foreach ($array_awal as $row) {
				echo "$row ";
			}
			echo "<br>";
			echo "After inserting $ the array is :";
			foreach ($array_tambah as $row) {
				echo "$row ";
			}
		?>
	</p>
	<p>
		No 8.
		<!-- PHP UNTUK SORTING ARRAY -->
		<?php
			$nama = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
			$asc_value = $nama;
			asort($asc_value);
			$asc_key = $nama;
			ksort($asc_key);
			$dsc_value = $nama;
			arsort($dsc_value);
			$dsc_key = $nama;
			krsort($dsc_key);

			echo "Ascending order sort by value<br>";
			foreach ($asc_value as $nama => $umur){
				echo "$nama $umur <br>";
			}
			echo "Ascending order sort by key<br>";
			foreach ($asc_key as $nama => $umur){
				echo "$nama $umur <br>";
			}
			echo "Desscending order sort by value<br>";
			foreach ($dsc_value as $nama => $umur){
				echo "$nama $umur <br>";
			}
			echo "Desending order sort by key<br>";
			foreach ($dsc_key as $nama => $umur){
				echo "$nama $umur <br>";
			}
		?>
	</p>
	<p>
		No 9.
		<!-- PHP UNTUK MENENTUKAN NILAI MAX MIN RATA2 -->
		<?php
			$temperatur = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
			$uniq = array_unique($temperatur);
			$rata2 = array_sum($uniq)/count($uniq);
			$rendah = $uniq;
			asort($rendah);
			$terendah = array_slice($rendah,0,5);
			$tinggi = $uniq;
			asort($tinggi);
			$tertinggi = array_slice($tinggi,-5,5);
			echo "Rata-rata temperatur : $rata2<br>";
			echo "5 list temperatur ter-rendah : ";
			foreach ($terendah as $row) {
				echo "$row, ";
			}
			echo "<br>";
			echo "5 list temperatur ter-tinggi : ";
			foreach ($tertinggi as $row) {
				echo "$row, ";
			}
		?>
	</p>
	<p>
		No 12.
		<!-- PHP UNTUK MENGUBAH HURUF MENJADI UPPERCASE DAN LOWERCASE -->
		<?php
			$color4 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
			$lower = array_map('strtolower', $color4);
			$uper = array_map('strtoupper', $color4);

			echo "Value are in lower case : Array ";
			foreach ($lower as $row => $val) {
				echo "[$row] => $val " ;
			}
			echo "<br>Value are in lower case : Array ";
			foreach ($uper as $row => $val) {
				echo "[$row] => $val " ;
			}
		?>
	</p>
	<p>
		No 13.
		<!-- PHP UNTUK MENGHILANGKAN VALUE DI ANTARA 2 VALUE -->
		<?php
			$angka = range(200,250);
			foreach ($angka as $row) {
				if($row % 4 == 0){
					echo "$row, ";
				}
			}
		?>
	</p>
	<p>
		No 14.
		<!-- PHP UNTUK MENGHITUNG PANJANG VALUE DARI KEY ARRAY -->
		<?php
			$sample_array = array("abcd","abc","de","hjjj","g","wer");
			$panjang = array_map('strlen', $sample_array);
			echo "The shortest array length is ".min($panjang).". The longest array length is ".max($panjang).".";
		?>
	</p>
	<p>
		No 15.
		<!-- PHP UNTUK GENERATE RANDOM NOMER  -->
		<?php
			$random_nomor = range(11,20);
			shuffle($random_nomor);
			
			foreach ($random_nomor as $row) {
				echo "$row ";
			}
		?>
	</p>
	<p>
		No 16.
		<!-- PHP UNTUK MENCARI KEY TERBESAR -->
		<?php
			$angka_angka = range(1,10);
			ksort($angka_angka);

			echo "key array : ";
			var_dump($angka_angka);
			echo "<br>Key tertinggi :";
			echo max($angka_angka);
		?>
	</p>
	<p>
		No 17.
		<!-- PHP UNTUK RETURN NILAI INTEGER TERKECIL SELAIN 0 -->
		<?php
			$angka = array(-10,3,4,5,12,-3,-4,-5,1,0,10);

			echo min($angka);
		?>
	</p>
	<p>
		No 36.
		<!-- PHP UNTUK UPPERCASE DAN LOWERCASE SEMUA ELEMEN ARRAY -->
		<?php
			$huruf_huruf = array('merah','kUninG','HIJAU','biru','Ungu');
			$besar = array_map('strtoupper', $huruf_huruf);
			$kecil = array_map('strtolower', $huruf_huruf);

			echo "Original : ";
			foreach ($huruf_huruf as $row) {
				echo "$row ";
			}
			echo "<br>Besar : ";
			foreach ($besar as $row) {
				echo "$row ";
			}
			echo "<br>Kecil : ";
			foreach ($kecil as $row) {
				echo "$row ";
			}
		?>
	</p>
	<p>
		No 39.
		<!-- PHP UNTUK MENGHITUNG BANYAK ANGKA YANG SAMA -->
		<?php
			$nilai_nilai = array(1,2,3,4,5,6,7,8,9,8,7,6,5,4,3,4,5,4,5,4,5,4,2,1,4,4);
			$input = 4;
			$banyak_angka = 0;

			echo "Inputan : $input <br>";
			foreach ($nilai_nilai as $row ) {
				if($row == $input){
					$banyak_angka++;
				}
			}

			echo "Banyak angka $input adalah : $banyak_angka";
		?>
	</p>
</body>
</html>