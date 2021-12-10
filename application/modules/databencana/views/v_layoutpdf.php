<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>Data Bencana</h2>

    <table>
        <tr>
            <th>Judul Bencana</th>
            <th>Jenis Bencana</th>
            <th>Deskripsi</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
        </tr>
        <?php foreach($bencanas as $b){ ?>
        <tr>
            <td><?php echo $b["judul_bencana"]; ?></td>
            <td><?php echo $b["jenis_bencana"]; ?></td>
            <td><?php echo $b["deskripsi_bencana"]; ?></td>
            <td><?php echo $b["alamat"]; ?></td>
            <td><?php echo $b["tanggal_kejadian"]; ?></td>
        </tr>
        <?php } ?>
        
    </table>

</body>

</html>