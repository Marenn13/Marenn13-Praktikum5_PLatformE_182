<html>
    <head>
        <title>Biodata</title>
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 50%;
            border-collapse: collapse;
        }

        table td {
            padding: 5px;
        }

        input[type="text"],
        input[type="date"] {
            width: 50%;
            padding: 6px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            
        }

        input[type="radio"] {
            margin-right: 5px;
            transform: scale(0.8);
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
        
    <body>
        <form method="POST" action="hasil.php">
        <table>
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="name"></td>
            </tr>
            </tr>
            <tr>
                <td>NIM</td>
                <td> <input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td> <input type="date" name="tglLahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                <input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Email</td>
                <td> <input type="text" name="email"></td>
            </tr>
            </table>
            <input type="submit" value="Submit">
  </form>
    </body>
</html>
