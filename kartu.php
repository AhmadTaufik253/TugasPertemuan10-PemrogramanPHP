<?php

$model = new Kartu();
$kartu = $model->Kartu();

// foreach($data_produk as $row){
//     print $row['kode'];
// }

?>
                        <h1 class="mt-4">Data Kartu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Kartu</li>
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
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach($kartu as $row){ 
                                        ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['diskon'] ?></td>
                                            <td><?= $row['iuran'] ?></td>
                                        </tr>
                                        <?php
                                        $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>