<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
        if (isset($_COOKIE["beliNovel"])) {
            $beliNovel = $_COOKIE["beliNovel"];
        } else {
            $beliNovel = 0; 
        }

        if (isset($_COOKIE["beliBuku"])) {
            $beliBuku = $_COOKIE["beliBuku"];
        } else {
            $beliBuku = 0; 
        }

        echo "Jumlah Novel: " . $beliNovel . "<br>";
        echo "Jumlah Buku: " . $beliBuku;
    ?>

</body>
</html>