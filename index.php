
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pelajar</title>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi </th>
        </tr>
        
        <?php $i = 1; ?>
        <?php while ($rows = mysqli_fetch_assoc($lemari)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $rows['nama']; ?></td>
            <td><?= $rows['umur']; ?></td>
            <td><a href="tambah.php">tambah</a> |
                <a href="">update</a> |
                <a href="delete.php?id=<?=$rows["id"]; ?>">delete</a>

            </td> 

        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>


    <script src="sc.js"></script>
</body>
</html>
