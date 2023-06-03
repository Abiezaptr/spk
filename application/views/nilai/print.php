<!DOCTYPE html>
<html>

<head>
    <title>Cetak Penilaian Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 8px;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        #example1 tfoot td {
            text-align: right;
        }

        #example1 tfoot td.total-amount {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="page-header">
        <h2>GENERATE PENILAIAN KARYAWAN</h2>
        <hr>
    </div>

    <br><br><br>
    <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">Nilai</span> Karyawan</h4>
    <p>Nama Pekerja &nbsp;: <b><?= $guru['0']['nama_karyawan'] ?></b></p>
    <p>Status Nilai &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?= $kinerja['nama_alternatif'] ?></b></p>

    <table class="table">
        <thead>
            <tr>
                <?php
                foreach ($kriteria as $k) {
                ?>
                    <th><?= $k['nama_kriteria'] ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            <tr>
                <?php
                foreach ($nilai_karyawan as $n) {
                ?>
                    <td><?= $n['nilai_karyawan'] ?></td>
                <?php }  ?>
            </tr>
        </tbody>
    </table>

    <br>
    <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Rating</span> Kinerja</h4>

    <table class="table">
        <thead>
            <tr>
                <th style="width: 6%">No</th>
                <th style="width: 10%">Alternatif</th>
                <?php
                foreach ($kriteria as $k) {
                ?>
                    <th><?= $k['nama_kriteria'] ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $index = 0;
            foreach ($alternatif as $a) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $a['nama_alternatif'] ?></td>
                    <?php
                    foreach ($kriteria as $k) {
                        if ($nilai == null) {
                    ?>
                            <td>0</td>
                        <?php } else { ?>
                            <td><?= $nilai[$index]['nilai'] ?></td>
                        <?php } ?>
                    <?php
                        $index = $index + 1;
                    }
                    ?>
                </tr>
            <?php
                $no = $no + 1;
            }
            ?>
        </tbody>
    </table>

    <br>
    <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Nilai</span> Normalisasi</h4>

    <table class="table">
        <thead>
            <tr>
                <th style="width: 6%">No</th>
                <th style="width: 10%">Nama</th>
                <?php
                foreach ($kriteria as $k) {
                ?>
                    <th><?= $k['nama_kriteria'] ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $index = 0;
            foreach ($alternatif as $a) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $a['nama_alternatif'] ?></td>
                    <?php
                    foreach ($kriteria as $k) {
                        if ($nilai == null) {
                    ?>
                            <td>0</td>
                        <?php } else { ?>
                            <td><?= $nilai[$index]['normalisasi'] ?></td>
                        <?php } ?>
                    <?php
                        $index = $index + 1;
                    }
                    ?>
                </tr>
            <?php
                $no = $no + 1;
            }
            ?>
        </tbody>
    </table>

    <br>
    <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Nilai</span> Terbobot</h4>

    <table class="table">
        <thead>
            <tr>
                <th style="width: 6%">No</th>
                <th style="width: 10%">Nama</th>
                <?php
                foreach ($kriteria as $k) {
                ?>
                    <th><?= $k['nama_kriteria'] ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $index = 0;
            foreach ($alternatif as $a) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $a['nama_alternatif'] ?></td>
                    <?php
                    foreach ($kriteria as $k) {
                        if ($nilai == null) {
                    ?>
                            <td>0</td>
                        <?php } else { ?>
                            <td><?= $nilai[$index]['terbobot'] ?></td>
                        <?php } ?>
                    <?php
                        $index = $index + 1;
                    }
                    ?>
                </tr>
            <?php
                $no = $no + 1;
            }
            ?>
        </tbody>
    </table>

    <br><br><br>
    <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Nilai</span> A+</h4>

    <table class="table">
        <thead>
            <tr>
                <?php
                foreach ($kriteria as $k) {
                ?>
                    <th><?= $k['nama_kriteria'] ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            <tr>
                <?php
                foreach ($A_plus as $a) {
                ?>
                    <td><?= $a['nilai_a'] ?></td>
                <?php }  ?>
            </tr>
        </tbody>
    </table>

    <br>
    <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Nilai</span> A-</h4>

    <table class="table">
        <thead>
            <tr>
                <?php
                foreach ($kriteria as $k) {
                ?>
                    <th><?= $k['nama_kriteria'] ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            <tr>
                <?php
                foreach ($A_min as $a) {
                ?>
                    <td><?= $a['nilai_a'] ?></td>
                <?php }  ?>
            </tr>
        </tbody>
    </table>

    <br>
    <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Hasil</span> Keseluruhan</h4>

    <table class="table">
        <thead>
            <tr>
                <th style="width: 6%">No</th>
                <th style="width: 10%">Nama</th>
                <th>Jarak Solisi Ideal Positif (D+)</th>
                <th>Jarak Solisi Ideal Negatif (D-)</th>
                <th>Nilai Preferensi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $index = 0;
            foreach ($alternatif as $a) {
            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $a['nama_alternatif'] ?></td>
                    <td><?= $hasil[$index][0] ?></td>
                    <td><?= $hasil[$index][1] ?></td>
                    <td><?= $hasil[$index][2] ?></td>
                    <?php
                    $index = $index + 1;
                    ?>
                </tr>
            <?php
                $no = $no + 1;
            }
            ?>
        </tbody>
    </table>

    <br><br><br>

    <script type="text/javascript">
        window.onload = function() {
            window.print();
        };
    </script>

</body>

</html>