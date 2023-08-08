<?php

/**
 * Author           : Alfikri
 * Created By       : Alfikri
 * E-Mail Primary   : alfikri.name@gmail.com
 * E-Mail Secondary : klinik.code@gmail.com
 * Blog             :  
 */

// Class rajaongkir
class rajaongkir
{

	private $key      = 'c3ccc1a385546a5b9af89abe5bda89eb'; // API Key dari rajaongkir
	private $city_url = 'https://api.rajaongkir.com/starter/city'; // Url untuk mengambil data kota
	private $cost_url = 'https://api.rajaongkir.com/starter/cost'; // Url untuk mengambil biaya ongkir

	// Untuk sorting array
	function array_sort_by_column(&$arr, $col, $dir = SORT_DESC)
	{
		$sort_col = array();
		foreach ($arr as $key => $row) {
			$sort_col[$key] = $row[$col];
		}

		array_multisort($sort_col, $dir, $arr);
	}

	// Untuk mengambil data kota
	function get_city()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $city_url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: {$key}"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}

	// Untuk mengambil data biaya ongkir berdasarkan kota asal, kota tujuan, berat dan kurir
	function get_cost($id_kota_asal, $id_kota_tujuan, $berat, $courir)
	{

		$key      = 'c3ccc1a385546a5b9af89abe5bda89eb'; // API Key dari rajaongkir
		$city_url = 'https://api.rajaongkir.com/starter/city'; // Url untuk mengambil data kota
		$cost_url = 'https://api.rajaongkir.com/starter/cost'; // Url untuk mengambil biaya ongkir


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $cost_url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => "origin=" . $id_kota_asal . "&destination=" . $id_kota_tujuan . "&weight=" . $berat . "&courier=" . $courir,
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: {$key}"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}
}



function nf($angka)
{
	return number_format($angka, 0, ",", ".");
}

function rupiah($angka)
{
	$fmt = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
	$formatAngka = $fmt->formatCurrency($angka, "IDR");

	return $formatAngka;
}

//format tanggal format aslinya return $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu." WIB";
date_default_timezone_set("Asia/Jakarta");


function tglwaktu_lengkap($date)
{
	$Bulan = array(
		"Januari", "Februari", "Maret", "April",
		"Mei", "Juni", "Juli", "Agustus", "September",
		"Oktober", "November", "Dessember"
	);
	$Hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
	$tahun = substr($date, 2, 2);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 5);
	$hari = date("w", strtotime($date));
	return $result = $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun . "<br>" . $waktu;
}

function tgl_lengkap($date)
{
	$Bulan = array(
		"Januari", "Februari", "Maret", "April",
		"Mei", "Juni", "Juli", "Agustus", "September",
		"Oktober", "November", "Dessember"
	);
	$Hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 5);
	$hari = date("w", strtotime($date));
	return $result = $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun;
}

function bulan($date)
{
	$Bulan = array(
		"Januari", "Februari", "Maret", "April",
		"Mei", "Juni", "Juli", "Agustus", "September",
		"Oktober", "November", "Dessember"
	);
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	return $result = $Bulan[(int)$bulan - 1] . " Tahun " . $tahun;
}

function judul_konten()
{
	return $judul = "Selamat Datang Di Aplikasi Sistem";
}

function kumulasi($id, $kode)
{
	$db = \Config\Database::connect();

	$output = $db->table('lhp')->where('id', $id)->where('kode_material', $kode)->get()->getRowArray();
	$t_pro = $db->table('lhp')->select('sum(ri_pro) as t')->where('id <=', $id)->where('kode_material', $kode)->get()->getRowArray();
	// dd($t_pro);
	$jml = $t_pro['t'];

	return $jml;
}

function nama_bulan($date)
{
	$Bulan = array(
		"Januari", "Februari", "Maret", "April",
		"Mei", "Juni", "Juli", "Agustus", "September",
		"Oktober", "November", "Dessember"
	);
	return $result = $Bulan[(int)$date - 1];
}

function tgl_long($date)
{
	$Bulan = array(
		"Januari", "Februari", "Maret", "April",
		"Mei", "Juni", "Juli", "Agustus", "September",
		"Oktober", "November", "Dessember"
	);
	$Hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 5);
	$hari = date("w", strtotime($date));
	return $result = $tgl . "/" . $bulan . "/" . $tahun . ", " . $waktu;
}

function tgl_sort($date)
{
	$Bulan = array(
		"Januari", "Februari", "Maret", "April",
		"Mei", "Juni", "Juli", "Agustus", "September",
		"Oktober", "November", "Dessember"
	);
	$Hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 5);
	$hari = date("w", strtotime($date));
	return $result = $tgl . "/" . $bulan . "/" . $tahun;
}


function ext($tipe)
{
	if (($tipe == 'gif') or ($tipe == 'GIF')) {
		$t = 'sesuai';
	} else
	if (($tipe == 'jpg') or ($tipe == 'JPG')) {
		$t = 'sesuai';
	} else
	if (($tipe == 'jpeg') or ($tipe == 'JPEG')) {
		$t = 'sesuai';
	} else
	if (($tipe == 'png') or ($tipe == 'PNG')) {
		$t = 'sesuai';
	} else
	if (($tipe == 'pdf') or ($tipe == 'PDF')) {
		$t = 'sesuai';
	} else {
		$t = 'tidak sesuai';
	}

	return $t;
}

function perawatan($id)
{
	$db = \Config\Database::connect();

	$output = $db->table('periksa_tindakan')->join('tarif', 'periksa_tindakan.tindakan=tarif.id_tarif')->where('id_periksa', $id)
		->get()->getResultArray();
	$data = $output;

	return $data;
}

function obat($id)
{
	$db = \Config\Database::connect();

	$output = $db->table('periksa_obat')->join('obat', 'periksa_obat.obat=obat.id_obat')->where('id_periksa', $id)
		->get()->getResultArray();
	$data = $output;

	return $data;
}
