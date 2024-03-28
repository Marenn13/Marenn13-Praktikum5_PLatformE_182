<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Luas persegi panjang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        input[type="text"] {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h2 {
            margin-top: 0;
        }
        .result {
            margin-top: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Menghitung Luas Persegi Panjang</h2>
    <form action="" method="post">
        <label>Panjang :</label><br/>
        <input type="text" name="panjang"><br/><br/>
        <label>Lebar :</label><br/>
        <input type="text" name="lebar"><br/><br/>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if(is_numeric($_POST['panjang']) && is_numeric($_POST['lebar'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $luas = $panjang * $lebar;
        echo '<div class="result">';
        echo 'Luas Persegi Panjang adalah: ' . $luas;
        echo '</div>';
    }
    ?>
</body>
</html>
