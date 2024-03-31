<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="list.css">
    <title>List Produk</title>
</head>
<body>
    <h2><center>List Produk</center></h2>

    <?php
    // Definisikan data produk dalam bentuk array asosiatif
    $produk1 = array(
        'nama' => 'Zifriend ZA68',
        'harga' => 500000,
        'deskripsi' => 'Sebuah keyboard yang mendapat banyak perhatian karena harganya yang terjangkau dan desainnya yang menarik. Keyboard ini hadir dalam dua varian, yaitu wired only dan wireless.'
    );

    $produk2 = array(
        'nama' => 'Fantech Venom 2 WGC2 Wireless',
        'harga' => 150000,
        'deskripsi' => 'Mouse gaming nirkabel yang dirancang khusus untuk memberikan pengalaman gaming yang optimal dengan kenyamanan.'
    );

    $produk3 = array(
        'nama' => 'Rexus Vonix F30',
        'harga' => 190000,
        'deskripsi' => 'Headset yang diperuntukkan bagi para pemain game PC serta untuk mobile/handphone.'
    );

    // Gabungkan produk ke dalam array
    $daftar_produk = array($produk1, $produk2, $produk3);
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
        </tr>
        <?php foreach ($daftar_produk as $produk): ?>
            <tr>
                <td><?php echo $produk['nama']; ?></td>
                <td>Rp <?php echo number_format($produk['harga']); ?></td>
                <td><?php echo $produk['deskripsi']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
