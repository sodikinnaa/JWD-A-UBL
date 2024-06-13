<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

// $hasil = $angka1 +$angka2;
echo ($angka1 . $operator . $angka2 . '=');

$hasil = $angka1 + $angka2;

if (is_numeric($angka1) && is_numeric($angka2)) {
    switch ($operator) {
        case '+':
            $hasil = $angka1 + $angka2;
            $operasi = 'Pernjumlahan';
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            $operasi = 'Perkurangan';
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            $operasi = 'Perkalian';
            break;
        case '/':
            if ($angka2 != 0) {
                $operasi = 'Pembagian';
                $hasil = $angka1 / $angka2;
            } else {
                $hasil = 'Pembagian dengan nol tidak diperbolehkan';
            }
            break;
        default:
            $hasil = 'Operator tidak valid';
            break;
    }

}
echo ($hasil);

?>

<div class="">Hasil <?= $operasi ?> dari <?= $angka1 ?> <?= $operator ?> <?= $angka2 ?> adalah <?= $hasil ?>
</div>
<a href="index.php">Back</a>