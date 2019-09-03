<?php 
//	Code name : Random country,code,ip 
//	Date : 04/03/2017
//	Money Hunterz Family
//	If money not sleep,we can't rest

// Get negara //
$country = file_get_contents('list.txt');
$explode_negara = explode("\r\n", $country);
$jumlah_negara = count($explode_negara); 
$random = rand(0,$jumlah_negara-1);
$negara = $explode_negara[$random];
// Get Code Negara //
$code_country = file_get_contents('list_code.txt');
$explode_code = explode("\r\n", $code_country);
$jumlah_kode = count($explode_code);
$kode_negara = $explode_code[$random];
// get IP //
$ip = rand(1,100).".".rand(1,255).".".rand(1,255).".".rand(1,255);
// Get UA ///
$list_os = file_get_contents('list_os.txt');
$explode_os = explode(",", $list_os);
$jumlah_os = count($explode_os);
$random_os = rand(0, $jumlah_os-1);
$os = $explode_os[$random_os];
// Get Device //
$list_ua = file_get_contents('list_ua.txt');
$explode_ua = explode(",", $list_ua);
$jumlah_ua = count($explode_ua);
$random_ua = rand(0, $jumlah_ua-1);
$ua = $explode_ua[$random_ua];
    header('Content-Type: application/xml');
    $output = '
	<app>
	<negara>
	<name>'.$negara.'</name>
	<code>'.$kode_negara.'</code>
	<ip>'.$ip.'</ip>
	<os>'.$os.'</os>
	<ua>'.$ua.'</ua>
	</negara>
	</app>
	';
    echo $output;
?>       