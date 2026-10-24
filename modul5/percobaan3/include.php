<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <label>Angka Pertama:</label>
        <input type="number" name="angka1" required>

        <br><br>

        <label>Operator:</label>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <br><br>

        <label>Angka Kedua:</label>
        <input type="number" name="angka2" required>

        <br><br>

        <input type="submit" name="hitung" value="Hitung">

    </form>

    <br>

    <label>Hasil:</label>

    <input type="text" value="<?php

        if (isset($_POST['hitung'])) {

            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            if ($operator == "+") {
                echo $angka1 + $angka2;

            } elseif ($operator == "-") {
                echo $angka1 - $angka2;

            } elseif ($operator == "*") {
                echo $angka1 * $angka2;

            } elseif ($operator == "/") {

                if ($angka2 != 0) {
                    echo $angka1 / $angka2;
                } else {
                    echo "Tidak dapat dibagi dengan 0";
                }
            }
        }

    ?>" readonly>

</body>
</html>