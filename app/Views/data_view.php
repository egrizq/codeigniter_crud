<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <a href="<?= base_url('tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Agama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tinggi Badan</th>
                                        <th>Berat Badan</th>
                                        <th>Status Pernikahan</th>
                                        <th>Jenis Identitas</th>
                                        <th>Nomor Identitas</th>
                                        <th>Hobby</th>
                                        <th>Alamat</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach($getBarang as $isi){?>
                                    <tr>
                                        <td><?= $isi['NAMA'];?></td>
                                        <td><?= $isi['AGAMA'];?></td>
                                        <td><?= $isi['TEMPATLAHIR'];?></td>
                                        <td><?= $isi['TINGGIBADAN'];?></td>
                                        <td><?= $isi['BERATBADAN'];?></td>
                                        <td><?= $isi['NAMAHUBUNGAN'];?></td>
                                        <td><?= $isi['JENIS_DOKUMEN'];?></td>
                                        <td><?= $isi['NOMOR_DOKUMEN'];?></td>
                                        <td><?= $isi['NAMAHOBBY'];?></td>
                                        <td><?= $isi['ALAMAT'];?></td>
                                        <td>
                                            <a href="<?= base_url('edit/'.$isi['ID_PENDAFTARAN']);?>"
                                                class="btn btn-success">
                                                Edit</a>
                                            <a href="<?= base_url('hapus/'.$isi['ID_PENDAFTARAN']);?>"
                                                onclick="javascript:return confirm('Apakah ingin menghapus data?')"
                                                class="btn btn-danger">
                                                Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $no++;}?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>