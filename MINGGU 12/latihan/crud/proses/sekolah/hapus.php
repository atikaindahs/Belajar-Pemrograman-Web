<?php
include '../../conf.php';
include '../../conn.php';
$conn = new Connect();
$id = get('id');
$hapus_data = $conn->delete($id);

if ($hapus_data) {
    header("location:../../index.php?p=sekolah");
}