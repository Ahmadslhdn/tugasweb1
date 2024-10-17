<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<body>
    <h1>Data yang Anda Isi</h1>
    <table border="1">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo htmlspecialchars($_GET['nama_lengkap']); ?></td>
        </tr>
        <tr>
            <td>Nama Panggilan</td>
            <td><?php echo htmlspecialchars($_GET['nama_panggilan']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($_GET['email']); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo htmlspecialchars($_GET['jk']); ?></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td><?php echo htmlspecialchars($_GET['fk']); ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <?php
                if (!empty($_GET['hobi'])) {
                    echo htmlspecialchars(implode(', ', $_GET['hobi']));
                } else {
                    echo 'Tidak ada hobi yang dipilih';
                }
                ?>
            </td>
        </tr>
    </table> <br>
    <form action="index.html">
        <button type"submit" class="button">Exit</button>
    </form>
</body>
</html>
