<!DOCTYPE html>
<html><head>
        <style>table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        </style>
    </head><body>
        <?php

            setlocale(LC_ALL, 'id_ID');
            $hari = strftime('%A');
            $bulan = strftime('%B');
            $month = date('m');
            $day = date('l');

            switch ($day) {
                case "Monday":
                  $hari = "Senin";
                  break;
                case "Tuesday":
                  $hari = "Selasa";
                  break;
                case "Wednesday":
                  $hari = "Rabu";
                  break;
                case "Thursday":
                  $hari = "Kamis";
                  break;
                case "Friday":
                  $hari = "Jumat";
                  break;
                case "Saturday":
                  $hari = "Sabtu";
                  break;
                case "Sunday":
                  $hari = "Minggu";
                  break;
                }

            switch ($month) {
                case "1":
                  $bulan = "Januari";
                  break;
                case "2":
                  $bulan = "Februari";
                  break;
                case "3":
                  $bulan = "Maret";
                  break;
                case "4":
                  $bulan = "April";
                  break;
                case "5":
                  $bulan = "Mei";
                  break;
                case "6":
                  $bulan = "Juni";
                  break;
                case "7":
                  $bulan = "Juli";
                  break;
                case "8":
                  $bulan = "Agustus";
                  break;
                case "9":
                  $bulan = "September";
                  break;
                case "10":
                  $bulan = "Oktober";
                  break;
                case "11":
                  $bulan = "November";
                  break;
                case "12":
                  $bulan = "Desember";
                  break;
              }
        ?>
        <div class="container">
            <h2 style="text-align:center">Laporan Harian Kebersihan dan Kerapihan Ruangan Gedung Bersama Maju</h2>
            <h2 style="text-align:center">Hari <?php echo $hari; ?> Tanggal <?php echo date('d')?> <?php echo $bulan ?> <?php echo date('Y')?></h2>
            <?php
            date_default_timezone_set('Asia/Jakarta');
            ?>
            <p style="text-align:center; font-style:italic">Tanggal Cetak <?php echo date('d')?> <?php echo $bulan ?> <?php echo date('Y')?> <?php echo date('h:i')?> WIB</p>
            <table style="width:100%">
                <tr>
                <tr>
                    <th>No</th>
                    <th>Ruang</th>
                    <th>Nama CS</th>
                    <th>Status</th>
                </tr>
                <?php 
                $i=0;
                foreach ($pengerjaan as $row): $i++;?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row->noruang ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->status ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <p style="text-align:right">Approval   </p>
            <br>
            <br>
            <br>
            <p style="text-align:right">Arif Sutowo</p>
            <p style="text-align:right">Manager</p>
        </div>
    </body></html>
