<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-5">
        <a href="<?= base_url('/');?>" class="btn btn-secondary mb-2">Kembali</a>
        <form method="post" class="card p-3" action="<?= base_url('/update');?>">
            <div class="text-center PB-2">
                <h1>FORM EDIT DATA</h1>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" value="<?= $data->NAMA;?>" name="nama" class="form-control"
                            placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tinggi Badan</label>
                        <input type="number" value="<?= $data->TINGGIBADAN;?>" name="tinggi_badan" class="form-control"
                            placeholder="Tinggi Badan" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Identitas</label>
                        <input type="text" value="<?= $data->JENIS_DOKUMEN;?>" name="jenis_identitas"
                            class="form-control" placeholder="Jenis Identitas" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="">Agama</label>
                        <input type="text" value="<?= $data->AGAMA;?>" name="agama" class="form-control"
                            placeholder="Agama" required>
                    </div>

                    <div class="form-group">
                        <label for="">Berat Badan</label>
                        <input type="number" value="<?= $data->BERATBADAN;?>" name="berat" class="form-control"
                            placeholder="Berat Badan" required>
                    </div>

                    <div class="form-group">
                        <label for="">Nomor Identitas</label>
                        <input type="number" value="<?= $data->NOMOR_DOKUMEN;?>" name="nomor_identitas"
                            class="form-control" placeholder="Nomor Identitas" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" value="<?= $data->TEMPATLAHIR;?>" name="lahir" class="form-control"
                            placeholder="Tempat Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="">Status Pernikahan</label>
                        <input type="text" value="<?= $data->JENIS_DOKUMEN;?>" name="pernikahan" class="form-control"
                            placeholder="Status Pernikahan" required>
                    </div>
                    <input type="hidden" value="<?= $data->ID_PENDAFTARAN;?>" name="id">
                    <div class="form-group">
                        <label for="">Hobby</label>
                        <input type="text" value="<?= $data->NAMAHOBBY;?>" name="hobby" class="form-control"
                            placeholder="Hobby" required>
                    </div>
                </div>
            </div>

            <div class="form-group pb-4">
                <label for="">Alamat</label>
                <textarea type="text" name="alamat" rows="4" class="form-control" placeholder="Alamat"
                    required><?= $data->ALAMAT;?></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-danger col-3">Simpan</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>