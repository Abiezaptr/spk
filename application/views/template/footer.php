<!-- Vendor js -->
<script src="<?= base_url('assets') ?>/js/vendor.min.js"></script>

<!-- Daterangepicker js -->
<script src="<?= base_url('assets') ?>/vendor/daterangepicker/moment.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/daterangepicker/daterangepicker.js"></script>

<!-- Apex Charts js -->
<script src="<?= base_url('assets') ?>/vendor/apexcharts/apexcharts.min.js"></script>

<!-- Vector Map js -->
<script src="<?= base_url('assets') ?>/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<!-- Dashboard App js -->
<script src="<?= base_url('assets') ?>/js/pages/demo.dashboard.js"></script>

<!-- App js -->
<script src="<?= base_url('assets') ?>/js/app.min.js"></script>

<!-- Datatables js -->
<script src="<?= base_url('assets') ?>/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('assets') ?>/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<!-- Datatable Demo Aapp js -->
<script src="<?= base_url('assets') ?>/js/pages/demo.datatable-init.js"></script>

<script>
    // Mengambil data dari model
    var data = <?php echo json_encode($data); ?>;

    // Membuat array untuk menyimpan nama karyawan, nilai akhir, dan peringkat
    var labels = [];
    var nilaiAkhir = [];
    var peringkat = [];

    // Memasukkan data ke dalam array
    data.forEach(function(item) {
        labels.push(item.nama_karyawan);
        nilaiAkhir.push(item.nilai_akhir);
        peringkat.push(item.peringkat);
    });

    // Membuat chart dengan menggunakan Chart.js
    var ctx = document.getElementById('rankingChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Nilai Akhir',
                data: nilaiAkhir,
                backgroundColor: [
                    '#1d7af3', // Warna batang pertama
                ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                y: {
                    display: false, // Menghilangkan sumbu Y
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Ranking Karyawan'
                }
            },
            layout: {
                padding: {
                    top: 30 // Menambahkan ruang atas untuk memperbesar batang
                }
            }
        }
    });
</script>

<script>
    var pieChart = document.getElementById('pieChart').getContext('2d');

    var myPieChart = new Chart(pieChart, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [<?php
                        foreach ($jumlah as $j) {
                            echo $j . ",";
                        }
                        ?>],
                backgroundColor: ["#716aca", "#1d7af3", "#fdaf4b", "#59d05d", "#f3545d"],
                borderWidth: 0
            }],
            labels: [<?php
                        foreach ($alternatif as $a) {
                            echo "'" . $a['nama_alternatif'] . "',";
                        }
                        ?>]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle: true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    })
</script>

</body>

</html>