<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tiket</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        form {
            margin-top: 30px;
            margin-left: 300px;
            margin-right: 300px;
            border-style: solid;
            border-color: grey;
            border-width: 10px;
            padding: 50px;
        }

        .btn {
            margin-left: 10px;
            width: 200px;
        }
    </style>

</head>

<body>
    <?php
    include('header.php');

    include('koneksi.php');
    $sql = "SELECT * FROM data_tiket ORDER BY id desc LIMIT 1";

    $hasil_query = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_array($hasil_query)) {

    ?>

        <form action="tes.php" method="POST">
            <div class="header">
                <h1>Form Pemesanan</h1>
            </div><br>

            <input type="hidden" name="harga_tiket" value="Rp. 10.000">
            <input type="hidden" name="total_bayar" value="Rp.">
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" placeholder="Nama Lengkap" name="nama_pemesan" value="<?php echo $data['nama_pemesan']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputNumber3" class="col-sm-2 col-form-label">Nomor Identitas</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputNumber3" placeholder="Nomor Identitas" name="nomor_identitas" value="<?php echo $data['nomor_identitas']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputNumber3" class="col-sm-2 col-form-label">No. HP</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputNumber3" placeholder="Nomer HP" name="no_hp" value="<?php echo $data['no_hp']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="wisata" class="col-sm-2 col-form-label">Tempat Wisata</label>
                <?php $tempat_wisata = $data['tempat_wisata']; ?>
                <div class="col-sm-10">
                    <select name="tempat_wisata" class="form-control" id="wisata">
                        <option <?php echo ($tempat_wisata == 'Danau Cibereum') ? "selected" : "" ?>>Danau Cibereum</option>
                        <option <?php echo ($agama == 'Curug Parigi') ? "selected" : "" ?>>Curug Parigi</option>
                        <option <?php echo ($agama == 'Taman Rusa Kemang') ? "selected" : "" ?>>Taman Rusa Kemang</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputdate3" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputdate3" name="tanggal_kunjungan">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputNumber3" class="col-sm-2 col-form-label">Pengunjung Dewasa</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputNumber3" placeholder="Jumlah Orang" name="pengunjung_dewasa" value="<?php echo $data['pengunjung_dewasa']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputNumber3" class="col-sm-2 col-form-label">Pengunjung Anak-Anak</label>

                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputNumber3" placeholder="Jumlah Orang" name="pengunjung_anak" value="<?php echo $data['pengunjung_anak']; ?>">

                </div>
                <small class="form-text text-muted" style="margin-left: 20px;"><b>Usia Di bawah 12 Tahun.</b></small>
            </div>

            <p>Harga &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; <b> Rp. 10.000</b></p>

            <p>Total Bayar &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; <b> Rp. <?php echo $data['total_bayar']; ?></b></p>

            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Saya dan / atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.
                    </label>
                </div>
            </div>
            <br>
            <input type="submit" id="" name="s" value="Hitung Total Bayar" class="btn btn-dark " style="margin-left: 170px;">
            <input type="submit" id="" name="d" value="Pesan Tiket" class="btn btn-dark ">
            <input type="submit" id="" name="e" value="Cancel" class="btn btn-dark ">
        <?php
    }
        ?>
        </form>
</body>

</html>