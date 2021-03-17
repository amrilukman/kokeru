<?php
    header("Content-type:application/octet-stream/");
    header("Content-Disposition:attachment; filename=$title.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>


<table>
    <thread>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>No. Ruang</th>
            <th>Cleaning Service</th>
            <th>Status</th>
        </tr>
    </thread>
    <tbody>
        <?php $i=0; ?>
        <?php foreach ($pengerjaan as $row): $i++;?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row->tglpengerjaan ?></td>
            <td><?php echo $row->noruang ?></td>
            <td><?php echo $row->nama ?></td>
            <td><?php echo $row->status ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>