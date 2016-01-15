<?php 
include "datasource.php";

$id_peserta = @$_POST['id'];
$response= array(
	'success'=>false, 
	'message'=>'Tidak terdaftar'
);

if(isset($_POST['send'])){

	$row = searchMember($id_peserta);
	if(isset($row)) {
		$response = array(
			'success' => true,
			'message' => 'Absensi diterima',
			'detail'  => $row,
		);
	}

}

echo json_encode($response);