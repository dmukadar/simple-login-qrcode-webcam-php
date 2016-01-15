<?php

function searchMember($idPeserta) {
    $result = array(
        '1'=>array('nama'=>'Abdi Wijayanto', 'tanggal_daftar'=>'12/01/2016'),
        '2'=>array('nama'=>'Budi Sutrisno', 'tanggal_daftar'=>'10/01/2016'),
        '3'=>array('nama'=>'Wall-E', 'tanggal_daftar'=>'15/01/2016'),
        '4'=>array('nama'=>'Safrudin', 'tanggal_daftar'=>'11/01/2016'),
        '5'=>array('nama'=>'Eko Wahyudi', 'tanggal_daftar'=>'12/01/2016'),
    );

    return isset($result[$idPeserta]) ? $result[$idPeserta] : null;
}