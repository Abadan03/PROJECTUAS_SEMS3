<?php
include '../controllers/config.php';
if(isset($_POST['search'])){
    $search = $_POST['search'];

    $query = "SELECT * FROM `jadwalpenerbangan` WHERE asal_kota LIKE '{$search}%' OR kota_tujuan LIKE '{$search}%'";

    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){?>
        <table class="table-bordered table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Pesawat</th>
                    <th scope="col">Tanggal Keberangkatan</th>
                    <th scope="col">Asal Kota</th>
                    <th scope="col">Kota Tujuan</th>
                    <th scope="col">Jam Berangkat</th>
                    <th scope="col">Jam Tiba</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Pesan Tiket</th>
                    </tr>
                </thead>
                <tbody id"searchresult">
                    <?php 
                    while($row = mysqli_fetch_assoc($result)) {
                        
                        $id = $row['id'];
                        $pesawat_id = $row['pesawat_id'];
                        $tipe_pesawat = $row['tipe_pesawat'];
                        $tgl_keberangkatan = $row['tgl_keberangkatan'];
                        $asal_kota = $row['asal_kota'];
                        $kota_tujuan = $row['kota_tujuan'];
                        $jam_berangkat = $row['jam_berangkat'];
                        $jam_tiba = $row['jam_tiba'];
                        $bandara_tujuan = $row['bandara_tujuan'];
                        $harga_tiket = $row['harga_tiket'];
                        // $biaya_query = "SELECT * FROM `jadwalpenerbangan` WHERE harga_tiket = $harga_tiket";
                        $biaya_tiket = str_replace(' ', '', $harga_tiket);
                        // $biaya_result = mysqli_query($conn, $tiket);
                        
                        ?>
                        <tr>
                            <th scope="row"><?php echo $id;?></th>
                            <td><?php echo $pesawat_id;?></td>
                            <td><?php echo $tgl_keberangkatan;?></td>
                            <td><?php echo $asal_kota;?></td>
                            <td><?php echo $kota_tujuan;?></td>
                            <td><?php echo $jam_berangkat;?></td>
                            <td><?php echo $jam_tiba;?></td>
                            <td><?php echo $bandara_tujuan;?></td>
                            <td><?php echo $harga_tiket;?></td>
                            <td><?php echo $tipe_pesawat;?></td>
                            <td>
                                <button class="btn btn-info" type="submit">
                                    <a href="../views/konfirmasi_pembayaran.php?biaya=<?=$biaya_tiket?>">pesan</a>
                                </button>
                            </td>
                        </tr> 
                        <?php 
                    }
                ?>
                </tbody>
            </table>
        <?php

    }else {
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }
}
?>