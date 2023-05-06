<?php

$model = new Pelanggan();
$jenis_produk = $model->Pelanggan();

// foreach($data_produk as $row){
//     print $row['kode'];
// }

?>
                        <h1 class="mt-4">Data Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pelanggan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Kartu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Kartu</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($jenis_produk as $row){ 
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode'] ?></td>
                                            <td><?= $row['nama_pelanggan'] ?></td>
                                            <td><?= $row['jk'] ?></td>
                                            <td><?= $row['tmp_lahir'] ?></td>
                                            <td><?= $row['tgl_lahir'] ?></td>
                                            <td><?= $row['alamat'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['kartu'] ?></td>
                                        </tr>
                                        <?php
                                        $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>