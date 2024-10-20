<?php
foreach($data as $baris){
    echo $baris->book_id.'<br>';
    echo $baris->pengguna_id.'<br>';
    echo $baris->tgl_peminjaman.'<br>';
}
?>