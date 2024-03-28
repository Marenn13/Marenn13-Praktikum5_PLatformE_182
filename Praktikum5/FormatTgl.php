<!DOCTYPE html>
<html>
<head>
    <title>Tanggalan</title>
</head>
<body>
    <?php
        echo "<p>Format tanggal dan waktu standar: " . date("m-F-Y, g:i:s") . "</p>";
        echo "<p>Format alternatif 1: " . date("d/m/Y, H:i:s") . "</p>";
        echo "<p>Format alternatif 2: " . date("D, d M Y, h:i A") . "</p>";
        echo "<p>Format alternatif 3: " . date("l, F jS Y, g:ia") . "</p>";
        echo "<p>Format alternatif 4: " . date("l, d F Y, H:i:s") . "</p>";
    ?>
</body>
</html>
