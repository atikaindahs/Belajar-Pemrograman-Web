<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 PHP</title>
</head>

<body>
    <table>
        <form action="proses02.php" method="post">
            <tr>
                <td><label>NIM</label></td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td><label>Program Studi</label></td>
                <td>:</td>
                <td>
                    <select name="prodi">
                        <option value="Teknik Informatika S1">Teknik Informatika S1</option>
                        <option value="Sistem Informasi S1">Sistem Informasi S1</option>
                        <option value="Teknik Informatika D3">Teknik Informatika D3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Nilai Tugas</label></td>
                <td>:</td>
                <td><input type="text" name="nilai_tugas"></td>
            </tr>
            <tr>
                <td><label>Nilai UTS</label></td>
                <td>:</td>
                <td><input type="text" name="nilai_uts"></td>
            </tr>
            <tr>
                <td><label>Nilai UAS</label></td>
                <td>:</td>
                <td><input type="text" name="nilai_uas"></td>
            </tr>
            <tr>
                <td><label>Catatan Khusus</label></td>
                <td>:</td>
                <td><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</td>
            </tr>
            <tr>
                <td></td><td></td><td><input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</td>
            </tr>
            <tr>
                <td></td><td></td><td><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</td>
            </tr>
            <td>
                <button type="submit" name="kirim">Submit</button>
            </td>
        </form>
    </table>
</body>

</html>