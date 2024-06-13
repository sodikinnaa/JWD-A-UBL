<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perhitungan</title>
</head>
<body>
    <h1>Form Perhitungan JS</h1>
    <form id="formHitung" method="POST" action="proses.php">
        <div>
            <label for="angka1">Angka 1:</label>
            <input type="number" id="angka1" name="angka1" required>
        </div>
        <div>
            <label for="angka2">Angka 2:</label>
            <input type="number" id="angka2" name="angka2" required>
        </div>
        <div >
            <select name="operator" >
                <option value="*">Perkalian</option>
                <option value="+">Penjumlahan</option>
                <option value="/">Pembagian</option>
                <option value="-">Perkurangan</option>
            </select>
        </div>
        <button type="submit">Hitung</button>
    </form>

   

   
</body>
</html>
