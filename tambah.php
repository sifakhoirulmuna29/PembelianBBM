<html>
    <head>
</head>
<body>
    <h1> FORM PEMBELIAN BBM </h1>
    <form action = "proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="NIK">NIK:</label>
                    <input type="number" name="NIK" />
                </P>
                <p>
                    <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                    <select name="jenis_kendaraan">
                        <option value="motor">Motor</option>
                        <option value="mobil">Mobil</option>
                        <option value="truk">Truk</option>
                        <option value="bis">Bis</option>
                        <option value="tossa">Tossa</option>
                    </select>
                </p>
                <p>
                <input type="submit" value="Kirim Data" name="tambah" />
                </p>
</fieldshet>
</form>
</body>
</html>