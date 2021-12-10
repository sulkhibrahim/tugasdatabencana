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

    <h2>Jenis Bencana</h2>

    <table>
        <tr>
            <th>Jenis Bencana</th>
            <th>Jumlah Data</th>
        </tr>
        <?php foreach($jenisb as $b){ ?>
        <tr>
            <td><?php echo $b["jenis_bencana"]; ?></td>
            <td><?php echo $b["total"]; ?></td>
        </tr>
        <?php } ?>
        
    </table>

</body>

</html>